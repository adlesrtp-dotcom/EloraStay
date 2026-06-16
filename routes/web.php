<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\TipeKamarController;
use App\Http\Controllers\ReservasiController;

use App\Models\Kamar;
use App\Models\Reservasi;
use App\Models\Pembayaran;
use App\Models\User;

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

// HALAMAN RESERVASI

Route::post('/reservasi/store', [ReservasiController::class, 'store'])
    ->name('reservasi.store');
    Route::get('/reservasi', [ReservasiController::class, 'index'])
    ->name('reservasi');

// HALAMAN PEMBAYARAN
Route::get('/pembayaran', function () {

    if(!session('login')){
        return redirect('/login');
    }

    return view('pembayaran');

})->name('pembayaran');

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

Route::post('/registrasi', [AuthController::class, 'register'])
    ->name('register.process');

// LUPA PASSWORD
Route::get('/lupa-password', function () {
    return view('lupa-password');
})->name('lupa-password');

Route::get('/logout', [AuthController::class, 'logout'])
    ->name('logout');
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

    if(session('role') != 'admin'){
        return redirect('/login');
    }

    $totalPelanggan = User::where('role', 'pelanggan')->count();
    $totalReservasi = Reservasi::count();
    $totalKamar = Kamar::count();
    $totalPembayaran = Pembayaran::count();

    $reservasiTerbaru = Reservasi::with('user')
        ->latest()
        ->take(5)
        ->get();

    return view('dashboardadmin', compact(
        'totalPelanggan',
        'totalReservasi',
        'totalKamar',
        'totalPembayaran',
        'reservasiTerbaru'
    ));

})->name('dashboardadmin');

// DATA PELANGGAN ADMIN
// DATA PELANGGAN ADMIN
Route::get('/pelangganadmin', function () {

    if(session('role') != 'admin'){
        return redirect('/login');
    }

    $pelanggan = User::all();

    return view('pelangganadmin', compact('pelanggan'));

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