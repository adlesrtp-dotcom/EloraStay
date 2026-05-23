<?php

namespace App\Http\Controllers;

use App\Models\TipeKamar;

class TipeKamarController extends Controller
{
    public function index()
    {
        $tipeKamars = TipeKamar::with('kamars')->get();
        return view('tipe_kamar.index', compact('tipeKamars'));
    }
}