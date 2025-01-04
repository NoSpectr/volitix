<?php

namespace App\Http\Controllers;

use App\Models\ModelTiket;
use App\Models\Tiket;
use Illuminate\Http\Request;

class DetailPertandinganController extends Controller
{
    public function show($id)
    {
        // Mengambil data tiket berdasarkan ID
        $pertandingan = ModelTiket::findOrFail($id);

        // Mengembalikan view dengan data pertandingan
        return view('user.detailPertandingan.detailPertandingan', compact('pertandingan'));
    }
}
