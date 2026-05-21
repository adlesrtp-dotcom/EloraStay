<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/kamar', function () {
    return view('kamar');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/pembayaran', function () {
    return view('pembayaran');
});

Route::get('/reservasi', function () {
    return view('reservasi');
});

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.process');

Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::post('/registrasi', function () {
    return redirect('/login');
})->name('register.process');

Route::get('/lupa-password', function () {
    return view('lupa-password');
});

/*
|--------------------------------------------------------------------------
| PELANGGAN
|--------------------------------------------------------------------------
*/

Route::get('/tambah_pelanggan', function () {
    return view('tambah_pelanggan');
});

Route::post('/tambah_pelanggan', function () {
    return "Data pelanggan berhasil disimpan";
})->name('pelanggan.store');

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::get('/dashboardadmin', function () {
    return view('dashboardadmin');
})->name('dashboardadmin');

Route::get('/pelangganadmin', function () {
    return view('pelangganadmin');
})->name('pelangganadmin');

Route::get('/reservasiadmin', function () {

    $reservasi = [];

    return view('reservasiadmin', compact('reservasi'));

})->name('reservasiadmin');

Route::get('/kamaradmin', function () {
    return view('kamaradmin');
})->name('kamaradmin');

Route::get('/pembayaranadmin', function () {
    return view('pembayaranadmin');
})->name('pembayaranadmin');