<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Home
Route::get('/', function () {
    return view('home');
});

// Kamar
Route::get('/kamar', function () {
    return view('kamar');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function () {
    return "Login diproses";
})->name('login.process');

