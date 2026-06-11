<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Kamar;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {   
        $kamar = Kamar::where('tipe_kamar_id', $request->tipe_kamar_id)
                      ->where('status', 'tersedia')
                      ->first();

        if (!$kamar) {

            return back()->with('error', 'Kamar penuh');
        }

        $hari = \Carbon\Carbon::parse($request->checkin)
                ->diffInDays(
                    \Carbon\Carbon::parse($request->checkout)
                );

        $total = $hari * $request->harga;

        Booking::create([

            'nama' => $request->nama,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'kamar_id' => $kamar->id,
            'checkin' => $request->checkin,
            'checkout' => $request->checkout,
            'total_harga' => $total,
            'status' => 'pending'
        ]);

        $kamar->update([
            'status' => 'terisi'
        ]);

        return redirect('/kamar')
            ->with('success', 'Booking berhasil');
    }
}