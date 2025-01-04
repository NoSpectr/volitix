<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah pengguna terautentikasi dan memiliki peran 'user'
        if (Auth::check() && Auth::user()->role === 'user') {
            return $next($request); // Jika user, lanjutkan permintaan
        }

        // Jika bukan user, redirect atau tampilkan error
        return redirect('/login'); // Atau bisa juga return response()->view('error404', [], 404);
    }
}
