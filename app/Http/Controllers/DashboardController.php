<?php

namespace App\Http\Controllers;

use App\Models\ModelPembayaran; // Pastikan model Pembayaran di-import
use App\Models\ModelTiket;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // Menghitung jumlah pembayaran dengan status 'success'
        $jumlahPembayaranSuccess = ModelPembayaran::where('status_pembayaran', 'success')
            ->count();

        return view('dashboard', compact('jumlahPembayaranSuccess'));
    }

    public function index()
    {
        if (Auth::user()->role !== 'admin') {
            return redirect('/home');
        }

        // Menghitung jumlah event aktif
        $jumlahEventAktif = ModelTiket::count();

        // Menghitung total tiket terjual dari tb_pembayaran yang statusnya 'success'
        $jumlahPembayaranSuccess = ModelPembayaran::where('status_pembayaran', 'success')->count();

        // Menghitung total harga dari semua data di tb_pembayaran yang statusnya 'success'
        $totalPenjualan = ModelPembayaran::where('status_pembayaran', 'success')->sum('total_harga');

        return view('seller.dashboard.dashboard', compact('jumlahEventAktif', 'jumlahPembayaranSuccess', 'totalPenjualan'));
    }
}
