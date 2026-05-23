<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\TipeKamarController;


Route::get('/', function () {
    return redirect('/dashboard');
});

/*
|--------------------------------------------------------------------------
| HALAMAN UTAMA
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/*
|--------------------------------------------------------------------------
| USER
|--------------------------------------------------------------------------
*/

// HALAMAN KAMAR (SUDAH TERHUBUNG DATABASE)
Route::get('/kamar', [KamarController::class, 'index'])
    ->name('kamar');

// HALAMAN BOOKING
Route::get('/booking', function () {
    return view('booking');
})->name('booking');

// HALAMAN PEMBAYARAN
Route::get('/pembayaran', function () {
    return view('pembayaran');
})->name('pembayaran');

// HALAMAN RESERVASI
Route::get('/reservasi', function () {
    return view('reservasi');
})->name('reservasi');

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

// LOGIN
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.process');

// REGISTER
Route::get('/registrasi', function () {
    return view('registrasi');
})->name('registrasi');

Route::post('/registrasi', function () {
    return redirect('/login');
})->name('register.process');

// LUPA PASSWORD
Route::get('/lupa-password', function () {
    return view('lupa-password');
})->name('lupa-password');

/*
|--------------------------------------------------------------------------
| PELANGGAN
|--------------------------------------------------------------------------
*/

// TAMBAH PELANGGAN
Route::get('/tambah_pelanggan', function () {
    return view('tambah_pelanggan');
})->name('tambah_pelanggan');

Route::post('/tambah_pelanggan', function () {
    return "Data pelanggan berhasil disimpan";
})->name('pelanggan.store');

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

// DASHBOARD ADMIN
Route::get('/dashboardadmin', function () {
    return view('dashboardadmin');
})->name('dashboardadmin');

// DATA PELANGGAN ADMIN
Route::get('/pelangganadmin', function () {
    return view('pelangganadmin');
})->name('pelangganadmin');

// DATA RESERVASI ADMIN
Route::get('/reservasiadmin', function () {

    $reservasi = [];

    return view('reservasiadmin', compact('reservasi'));

})->name('reservasiadmin');

// DATA KAMAR ADMIN
Route::get('/kamaradmin', function () {
    return view('kamaradmin');
})->name('kamaradmin');

// DATA PEMBAYARAN ADMIN
Route::get('/pembayaranadmin', function () {
    return view('pembayaranadmin');
})->name('pembayaranadmin');