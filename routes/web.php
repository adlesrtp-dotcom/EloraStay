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

