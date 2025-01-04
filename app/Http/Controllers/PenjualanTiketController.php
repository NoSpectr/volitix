<?php

namespace App\Http\Controllers;

use App\Models\ModelPembayaran;
use Illuminate\Http\Request;

class PenjualanTiketController extends Controller
{
    public function index(Request $request)
    {
        $query = ModelPembayaran::query();

        // Filter berdasarkan tahun
        if ($request->has('year')) {
            $query->whereYear('created_at', $request->year);
        }

        // Filter berdasarkan bulan
        if ($request->has('month')) {
            $query->whereMonth('created_at', $request->month);
        }

        // Ambil data pembayaran dengan status "Success"
        $pembayaran = $query->get(); // Ambil data sesuai filter

        // Ambil tahun dan bulan untuk dropdown
        $years = range(date('Y'), date('Y') - 5); // Contoh: 5 tahun terakhir
        $months = [
            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        ];

        return view('seller.penjualanTiket.penjualanTiket', compact('pembayaran', 'years', 'months'));
    }
}
