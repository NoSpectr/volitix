<?php

namespace App\Http\Controllers;

use App\Models\ModelPembayaran;
use App\Models\ModelTiket;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function showPayment(Request $request)
    {
        $idUser = $request->input('id_user');
        $idTiket = $request->input('id_tiket');
        $jumlahTiket = $request->input('jumlah_tiket');
        $totalHarga = $request->input('total_harga');

        // Ambil data tiket dan pembayaran
        $tiket = ModelTiket::findOrFail($idTiket);
        $pembayaran = ModelPembayaran::where('id_user', $idUser)
            ->where('id_tiket', $idTiket)
            ->first();

        // Kirim data ke view
        return view('user.payment.payment', compact('tiket', 'jumlahTiket', 'totalHarga', 'pembayaran'));
    }

    public function updateStatus($id)
    {
        // Ambil data pembayaran berdasarkan ID
        $pembayaran = ModelPembayaran::findOrFail($id);

        // Perbarui status pembayaran menjadi 'Success'
        $pembayaran->status_pembayaran = 'Success';
        $pembayaran->save(); // Simpan perubahan

        // Redirect kembali dengan pesan sukses
        return redirect()->route('payment.view', [
            'id_user' => $pembayaran->id_user,
            'id_tiket' => $pembayaran->id_tiket,
            'jumlah_tiket' => $pembayaran->jumlah_tiket,
            'total_harga' => $pembayaran->total_harga,
        ])->with('success', 'Pembayaran berhasil diverifikasi.');
    }

    public function store(Request $request)
    {
        // Validasi input dari request
        $request->validate([
            'id_user' => 'required|exists:users,id',
            'id_tiket' => 'required|exists:tb_tiket,id_tiket',
            'jumlah_tiket' => 'required|integer|min:1',
            'total_harga' => 'required|numeric',
            'payment_method' => 'required|string|in:QRIS,BCA,BRI,Mandiri,BNI,Permata,BSI,OVO,DANA,SHOPEEPAY,LINKAJA',
        ]);

        // Simpan data pembayaran
        ModelPembayaran::create([
            'id_user' => $request->id_user,
            'id_tiket' => $request->id_tiket,
            'jumlah_tiket' => $request->jumlah_tiket,
            'total_harga' => $request->total_harga,
            'metode_pembayaran' => $request->payment_method, // Simpan metode pembayaran
        ]);

        // Redirect ke halaman detail pembayaran, pastikan mengirimkan parameter yang diperlukan
        return redirect()->route('payment.view', [
            'id_user' => $request->id_user,
            'id_tiket' => $request->id_tiket,
            'jumlah_tiket' => $request->jumlah_tiket,
            'total_harga' => $request->total_harga,
        ])->with('success', 'Pembayaran berhasil dilakukan.');
    }
}
