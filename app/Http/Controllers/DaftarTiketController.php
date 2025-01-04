<?php

namespace App\Http\Controllers;

use App\Models\ModelPembayaran;
use App\Models\ModelTiket;
use Illuminate\Http\Request;

class DaftarTiketController extends Controller
{
    public function index()
    {
        // Ambil semua data pembayaran untuk user yang sedang login
        $pembayaran = ModelPembayaran::where('id_user', auth()->user()->id)->get();

        // Pisahkan pembayaran menjadi event mendatang dan event berlalu
        $pembayaranMendatang = $pembayaran->filter(function ($item) {
            $tiket = ModelTiket::find($item->id_tiket);
            return $tiket && \Carbon\Carbon::parse($tiket->tgl_event)->isFuture(); // Memeriksa apakah tanggal event di masa depan
        });

        $pembayaranBerlalu = $pembayaran->filter(function ($item) {
            $tiket = ModelTiket::find($item->id_tiket);
            return $tiket && \Carbon\Carbon::parse($tiket->tgl_event)->isPast(); // Memeriksa apakah tanggal event di masa lalu
        });

        // Kirim data ke view
        return view('user.daftarTiket.daftarTiket', compact('pembayaranMendatang', 'pembayaranBerlalu'));
    }
}
