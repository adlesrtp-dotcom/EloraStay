<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home');
});

Route::get('/kamar', function () {
    return view('kamar');
});

Route::get('/reservasi', function () {
    return view('reservasi');
});

Route::get('/pembayaran', function () {
    return view('pembayaran');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function () {
    return "Login diproses";
})->name('login.process');

Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::post('/registrasi', function () {
    return redirect('/login');
})->name('register.process');

Route::get('/tambah_pelanggan', function () {
    return view('tambah_pelanggan');
});

Route::post('/tambah_pelanggan', function () {
    return "Data pelanggan berhasil disimpan";
})->name('pelanggan.store');

Route::get('/booking', function () {
    return view('booking');
});

