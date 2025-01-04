<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DaftarTiketController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailPertandinganController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriTiketController;
use App\Http\Controllers\MetodePembayaranController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PenjualanTiketController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileSellerController;
use App\Http\Controllers\ProfileUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StatistikPenjualanController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

// Rute untuk halaman login
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

// Rute untuk logout
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/daftar-pertandingan', [TiketController::class, 'index'])->name('daftar-pertandingan');
    Route::get('/tambah-pertandingan', [TiketController::class, 'create'])->name('tambah-pertandingan');
    Route::post('/tambah-pertandingan', [TiketController::class, 'store']);
    Route::get('/edit-pertandingan/{id_tiket}', [TiketController::class, 'edit'])->name('edit-pertandingan');
    Route::put('/update-pertandingan/{id_tiket}', [TiketController::class, 'update'])->name('update-pertandingan');
    Route::delete('/hapus-pertandingan/{id_tiket}', [TiketController::class, 'destroy'])->name('hapus-pertandingan');

    Route::get('/penjualan-tiket', [PenjualanTiketController::class, 'index'])->name('penjualan-tiket');

    Route::get('/pengguna', [UserController::class, 'index'])->name('manajemen-pengguna');
    Route::get('/pengguna/edit/{id}', [UserController::class, 'edit'])->name('edit-pengguna');
    Route::put('/pengguna/{id}', [UserController::class, 'update'])->name('update-pengguna');
    Route::delete('/pengguna/{id}', [UserController::class, 'destroy'])->name('hapus-pengguna');

    Route::get('/profile-seller', [ProfileSellerController::class, 'index'])->name('profile.index');
    Route::post('/profile-seller/update', [ProfileSellerController::class, 'update'])->name('profile.updateSeller');
    Route::post('/profile-seller/delete', [ProfileSellerController::class, 'delete'])->name('profile.deleteSeller');
});

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('user.home');
    Route::get('/search', [HomeController::class, 'search'])->name('search');

    Route::get('/pertandingan', [HomeController::class, 'index'])->name('pertandingan.index');
    Route::get('/detailPertandingan/{id}', [HomeController::class, 'show'])->name('detailPertandingan');
    Route::get('/kategoriTiket/{id}', [KategoriTiketController::class, 'show'])->name('kategori.tiket');

    // Rute untuk menampilkan metode pembayaran (GET)
    Route::post('/metodePembayaran', [MetodePembayaranController::class, 'show'])->name('metodePembayaran');

    // Rute untuk memproses pembayaran (POST)
    Route::post('/payment/store', [PaymentController::class, 'store'])->name('payment.store');
    Route::post('/payment/update-status/{id}', [PaymentController::class, 'updateStatus'])->name('payment.updateStatus');
    Route::get('/payment', [PaymentController::class, 'showPayment'])->name('payment.view');

    Route::get('/daftarTiket', [DaftarTiketController::class, 'index'])->name('daftar.tiket');
    Route::get('/profile-user', [ProfileUserController::class, 'index'])->name('profile.index');
    Route::post('/profile/update', [ProfileUserController::class, 'update'])->name('profile.update');
    Route::post('/profile/delete', [ProfileUserController::class, 'delete'])->name('profile.delete');
});

// Rute untuk halaman yang tidak ditemukan
Route::fallback(function () {
    return response()->view('error404', [], 404);
});

require __DIR__ . '/auth.php';
