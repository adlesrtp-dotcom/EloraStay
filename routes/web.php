<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\TipeKamarController;
use App\Http\Controllers\ReservasiController;


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

// LOGIN ADMIN
Route::get('/loginadmin', function () {
    return view('loginadmin');
});

Route::post('/loginadmin',
    [AuthController::class, 'loginAdmin']);

// REGISTER
Route::get('/registrasi', function () {
    return view('registrasi');
})->name('registrasi');

Route::post('/registrasi', [AuthController::class, 'register'])
    ->name('register.process');

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
    return redirect('/dashboardadmin');
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