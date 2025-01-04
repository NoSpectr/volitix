<?php

namespace App\Http\Controllers;

use App\Models\ModelTiket;
use Illuminate\Http\Request;

class KategoriTiketController extends Controller
{
    public function show($id)
    {
        // Ambil data pertandingan berdasarkan ID
        $pertandingan = ModelTiket::findOrFail($id);

        // Kirim data ke view kategori tiket
        return view('user.kategoriTiket.kategoriTiket', compact('pertandingan'));
    }
}
