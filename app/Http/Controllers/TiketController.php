<?php

namespace App\Http\Controllers;

use App\Models\ModelTiket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TiketController extends Controller
{
    public function index()
    {
        $tikets = ModelTiket::all(); // Mengambil semua data tiket
        return view('seller.daftarPertandingan.daftarPertandingan', compact('tikets'));
    }

    public function create()
    {
        return view('seller.daftarPertandingan.tambahPertandingan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_event' => 'required|string|max:255',
            'tgl_event' => 'required|date',
            'jam' => 'required|date_format:H:i', // Validasi jam
            'harga' => 'required|numeric',
            'stock_tiket' => 'required|integer',
            'lokasi' => 'required|string|max:255',
            'deskripsi' => 'nullable|string', // Validasi deskripsi
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Menyimpan gambar jika ada
        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('tiket_images', 'public');
        }

        ModelTiket::create([
            'nama_event' => $request->nama_event,
            'tgl_event' => $request->tgl_event,
            'jam' => $request->jam, // Simpan jam
            'harga' => $request->harga,
            'stock_tiket' => $request->stock_tiket,
            'lokasi' => $request->lokasi,
            'deskripsi' => $request->deskripsi, // Simpan deskripsi
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('daftar-pertandingan')->with('success', 'Pertandingan berhasil ditambahkan.');
    }


    public function edit($id_tiket)
    {
        $tiket = ModelTiket::findOrFail($id_tiket); // Mengambil data tiket berdasarkan ID
        return view('seller.daftarPertandingan.editPertandingan', compact('tiket'));
    }

    public function update(Request $request, $id_tiket)
    {
        $request->validate([
            'nama_event' => 'required|string|max:255',
            'tgl_event' => 'required|date',
            'jam' => 'required|date_format:H:i', // Validasi jam
            'harga' => 'required|numeric',
            'stock_tiket' => 'required|integer',
            'lokasi' => 'required|string|max:255',
            'deskripsi' => 'nullable|string', // Validasi deskripsi
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        $tiket = ModelTiket::findOrFail($id_tiket);

        // Menyimpan gambar baru jika ada
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($tiket->gambar) {
                Storage::disk('public')->delete($tiket->gambar);
            }
            $gambarPath = $request->file('gambar')->store('tiket_images', 'public'); // Simpan gambar baru
            $tiket->gambar = $gambarPath; // Update path gambar
        }

        // Update data lainnya
        $tiket->update([
            'nama_event' => $request->nama_event,
            'tgl_event' => $request->tgl_event,
            'jam' => $request->jam, // Simpan jam
            'harga' => $request->harga,
            'stock_tiket' => $request->stock_tiket,
            'lokasi' => $request->lokasi,
            'deskripsi' => $request->deskripsi, // Simpan deskripsi
        ]);

        return redirect()->route('daftar-pertandingan')->with('success', 'Pertandingan berhasil diperbarui.');
    }

    public function destroy($id_tiket)
    {
        $tiket = ModelTiket::findOrFail($id_tiket); // Mencari tiket berdasarkan ID
        // Hapus gambar jika ada
        if ($tiket->gambar) {
            Storage::disk('public')->delete($tiket->gambar);
        }
        $tiket->delete(); // Menghapus tiket

        return redirect()->route('daftar-pertandingan')->with('success', 'Pertandingan berhasil dihapus.');
    }
}
