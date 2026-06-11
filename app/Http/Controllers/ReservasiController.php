<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use App\Models\Pembayaran;
use App\Models\Kamar;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ReservasiController extends Controller
{
    public function store(Request $request)
    {
        // Cari kamar tersedia berdasarkan tipe kamar
        $kamar = Kamar::where('tipe_kamar_id', $request->tipe_kamar_id)
            ->where('status', 'tersedia')
            ->first();

        if (!$kamar) {
            return back()->with('error', 'Kamar sudah penuh');
        }

        // Hitung jumlah malam
        $jumlahHari = Carbon::parse($request->checkin)
            ->diffInDays(
                Carbon::parse($request->checkout)
            );

        $totalHarga = $jumlahHari * $request->harga;

        // Simpan reservasi
        $reservasi = Reservasi::create([
            'user_id'      => 1, // sementara, nanti diganti Auth::id()
            'kamar_id'     => $kamar->id,
            'check_in'     => $request->checkin,
            'check_out'    => $request->checkout,
            'jumlah_tamu'  => 2,
            'total_harga'  => $totalHarga,
            'status'       => 'pending'
        ]);

        // Simpan pembayaran
        Pembayaran::create([
            'reservasi_id'       => $reservasi->id,
            'metode_pembayaran'  => $request->metode,
            'total_bayar'        => $totalHarga,
            'status'             => 'pending'
        ]);

        // Update status kamar
        $kamar->update([
            'status' => 'terisi'
        ]);

        return redirect('/reservasi')
            ->with('success', 'Reservasi berhasil dibuat');
    }
}   
