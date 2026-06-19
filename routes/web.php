<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
    $totalPendapatan = Pembayaran::sum('total_bayar');

    $reservasiTerbaru = Reservasi::with('user')
        ->latest()
        ->take(5)
        ->get();

    return view('dashboardadmin', compact(
        'totalPelanggan',
        'totalReservasi',
        'totalKamar',
        'totalPendapatan',
        'reservasiTerbaru'
    ));

})->name('dashboardadmin');


// DATA PELANGGAN ADMIN
Route::get('/pelangganadmin', function (Request $request) {

    if(session('role') != 'admin'){
        return redirect('/login');
    }

    $keyword = $request->cari;

    $pelanggan = User::where('role', 'pelanggan')
        ->when($keyword, function ($query) use ($keyword) {
            $query->where('name', 'like', "%{$keyword}%")
                  ->orWhere('email', 'like', "%{$keyword}%")
                  ->orWhere('telepon', 'like', "%{$keyword}%");
        })
        ->get();

    return view('pelangganadmin', compact('pelanggan', 'keyword'));

})->name('pelangganadmin');

// DATA RESERVASI ADMIN
Route::get('/reservasiadmin', function (Illuminate\Http\Request $request) {

    $search = $request->search;

    $reservasi = Reservasi::with([
        'user',
        'kamar.tipeKamar'
    ])

    ->when($search, function ($query) use ($search) {

        $query->whereHas('user', function ($q) use ($search) {

            $q->where('name', 'like', "%{$search}%");

        });

    })

    ->latest()
    ->get();

    return view('reservasiadmin', compact(
        'reservasi',
        'search'
    ));

})->name('reservasiadmin');

Route::get('/reservasi/{id}/status/{status}', function ($id, $status) {

    if(session('role') != 'admin'){
        return redirect('/login');
    }

    $reservasi = Reservasi::findOrFail($id);

    $reservasi->update([
        'status' => $status
    ]);

    return back();

})->name('reservasi.status');

// DATA KAMAR ADMIN
Route::get('/kamaradmin', function (Request $request) {

    if(session('role') != 'admin'){
        return redirect('/login');
    }

    $search = $request->search;

    $kamar = Kamar::with('tipeKamar')

        ->when($search, function ($query) use ($search) {

            $query->where('nomor_kamar', 'like', "%{$search}%")
                  ->orWhereHas('tipeKamar', function ($q) use ($search) {
                      $q->where('nama_tipe', 'like', "%{$search}%");
                  });

        })

        ->orderBy('nomor_kamar')
        ->get();

    return view('kamaradmin', compact(
        'kamar',
        'search'
    ));

})->name('kamaradmin');

// DATA PEMBAYARAN ADMIN
Route::get('/pembayaranadmin', function (Request $request) {

    if(session('role') != 'admin'){
        return redirect('/login');
    }

    $search = $request->search;

    $pembayaran = Pembayaran::with([
        'reservasi.user',
        'reservasi.kamar.tipeKamar'
    ])

    ->when($search, function ($query) use ($search) {

        $query->whereHas('reservasi.user', function ($q) use ($search) {

            $q->where('name', 'like', "%{$search}%");

        });

    })

    ->latest()
    ->get();

    return view('pembayaranadmin', compact(
        'pembayaran',
        'search'
    ));

})->name('pembayaranadmin');

Route::get('/pembayaran/{id}/status/{status}', function ($id, $status) {

    if(session('role') != 'admin'){
        return redirect('/login');
    }

    $pembayaran = Pembayaran::findOrFail($id);

    $pembayaran->update([
        'status' => $status
    ]);

    return back();

})->name('pembayaran.status');