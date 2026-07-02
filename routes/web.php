<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\TipeKamarController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\FasilitasController;

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

Route::post('/upload-bukti/{id}', function (Request $request, $id) {

    $request->validate([
        'bukti_pembayaran' => 'required|image|mimes:jpg,jpeg,png|max:2048'
    ]);

    $path = $request->file('bukti_pembayaran')
        ->store('bukti_pembayaran', 'public');

    $pembayaran = Pembayaran::findOrFail($id);

    $pembayaran->update([
        'bukti_pembayaran' => $path
    ]);

    return back()->with('success', 'Bukti pembayaran berhasil diupload');

})->name('upload.bukti');

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

    // PROSES LUPA PASSWORD
Route::post('/password/check', [AuthController::class, 'checkPassword'])
    ->name('password.check');

Route::get('/reset-password/{id}', [AuthController::class, 'showResetPassword'])
    ->name('password.reset');

Route::post('/reset-password/{id}', [AuthController::class, 'updatePassword'])
    ->name('password.update');
    
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

    $reservasi = Reservasi::with('kamar')->findOrFail($id);

    // Update status reservasi
    $reservasi->status = $status;
    $reservasi->save();

    // Jika checkout, kamar kembali tersedia
    if($status == 'checkout'){

        $reservasi->kamar->update([
            'status' => 'tersedia'
        ]);

    }

    return back();

})->name('reservasi.status');

// DATA KAMAR ADMIN
Route::get('/kamaradmin', function (Request $request) {

    if(session('role') != 'admin'){
        return redirect('/login');
    }

    $search = $request->search;

    $detail = null;

    if($request->detail){

        $detail = App\Models\TipeKamar::with('fasilitas')
                    ->find($request->detail);

    }

    $kamar = Kamar::with('tipeKamar.fasilitas')

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
        'search',
        'detail'
    ));

})->name('kamaradmin');


Route::post('/fasilitasadmin/{id}', [FasilitasController::class,'store'])
    ->name('fasilitas.store');

Route::put('/fasilitas/{id}', [FasilitasController::class,'update'])
    ->name('fasilitas.update');

Route::delete('/fasilitas/{id}', [FasilitasController::class,'destroy'])
    ->name('fasilitas.destroy');

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

    $pembayaran = Pembayaran::with('reservasi')->findOrFail($id);

    // Update status pembayaran
    $pembayaran->status = $status;
    $pembayaran->save();

    // Update status reservasi
    if($pembayaran->reservasi){
        $pembayaran->reservasi->status = 'lunas';
        $pembayaran->reservasi->save();
    }

    return back();

})->name('pembayaran.status');