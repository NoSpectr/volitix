<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah pengguna terautentikasi dan memiliki peran 'admin'
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request); // Jika admin, lanjutkan permintaan
        }

        // Jika bukan admin, redirect atau tampilkan error
        return redirect('/home'); // Atau bisa juga return response()->view('error404', [], 404);
    }
}
