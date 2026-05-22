<?php

namespace App\Http\Controllers;

use App\Models\Kamar;

class KamarController extends Controller
{
    public function index()
    {
        $kamar = Kamar::join(
            'tipe_kamars',
            'kamars.tipe_kamar_id',
            '=',
            'tipe_kamars.id'
        )
        ->select(
            'kamars.*',
            'tipe_kamars.nama_tipe',
            'tipe_kamars.deskripsi',
            'tipe_kamars.harga',
            'tipe_kamars.gambar'
        )
        ->get();

        return view('kamar', compact('kamar'));
    }
}