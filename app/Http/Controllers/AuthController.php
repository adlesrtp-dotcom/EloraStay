<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginAdmin;
use App\Models\LoginPelanggan;

class AuthController extends Controller
{
    // FORM LOGIN
    public function showLogin()
    {
        return view('login');
    }

    // LOGIN
    public function login(Request $request)
    {
        // cek admin
        $admin = LoginAdmin::where('username', $request->email)
                    ->where('password', $request->password)
                    ->first();

        if($admin)
        {
            return redirect('/dashboard-admin');
        }

        // cek pelanggan
        $pelanggan = LoginPelanggan::where('email', $request->email)
                        ->where('password', $request->password)
                        ->first();

        if($pelanggan)
        {
            return redirect('/dashboard-pelanggan');
        }

        return back()->with('error','Login gagal');
    }

    // FORM REGISTER
    public function showRegister()
    {
        return view('registrasi');
    }

    // REGISTER
    public function register(Request $request)
    {
        LoginPelanggan::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect('/login')
            ->with('success','Registrasi berhasil');
    }
}