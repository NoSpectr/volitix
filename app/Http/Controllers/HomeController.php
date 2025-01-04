<?php

namespace App\Http\Controllers;

use App\Models\ModelTiket;
use Carbon\Carbon as CarbonCarbon;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $tikets = ModelTiket::all()->map(function ($item) {
            $item->tgl_event = Carbon::parse($item->tgl_event); // Mengonversi string ke Carbon
            return $item;
        });

        return view('user.home.home', compact('tikets')); // Mengirim data ke view
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Mengambil tiket yang sesuai dengan nama_event
        $tikets = ModelTiket::where('nama_event', 'LIKE', '%' . $query . '%')->get()->map(function ($item) {
            $item->tgl_event = Carbon::parse($item->tgl_event); // Mengonversi string ke Carbon
            return $item;
        });

        return view('user.home.home', compact('tikets')); // Mengirim data ke view
    }

    public function show($id)
    {
        // Mencari tiket berdasarkan ID
        $pertandingan = ModelTiket::findOrFail($id);
        $pertandingan->tgl_event = Carbon::parse($pertandingan->tgl_event); // Mengonversi string ke Carbon

        return view('user.detailPertandingan.detailPertandingan', compact('pertandingan')); // Mengirim data ke view detail
    }
}
