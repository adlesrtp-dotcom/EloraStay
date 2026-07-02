<?php

namespace App\Http\Controllers;

use App\Models\TipeKamar;

class KamarController extends Controller
{
    public function index()
    {
        $tipeKamars = TipeKamar::with([
            'kamars',
            'fasilitas'
        ])->get();

        return view('kamar', compact('tipeKamars'));
    }
}