<?php

namespace App\Http\Controllers;

use App\Models\ModelPembayaran;
use App\Models\ModelTiket;
use Illuminate\Http\Request;

class MetodePembayaranController extends Controller
{
    public function show(Request $request)
    {
        // Validasi input dari request
        $request->validate([
            'jumlah_tiket' => 'required|integer|min:1',
            'pertandingan_id' => 'required|exists:tb_tiket,id_tiket',
        ]);

        // Ambil data dari request
        $jumlahTiket = $request->input('jumlah_tiket');
        $pertandinganId = $request->input('pertandingan_id');

        // Ambil data tiket dari database
        $tiket = ModelTiket::findOrFail($pertandinganId);

        // Kirim data ke view metode pembayaran
        return view('user.metodePembayaran.metodePembayaran', compact('jumlahTiket', 'tiket'));
    }
}
