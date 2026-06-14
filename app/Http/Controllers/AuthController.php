<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginAdmin;
use App\Models\LoginPelanggan;

class AuthController extends Controller
{
    // LOGIN
    public function login(Request $request)
    {
        // Cek admin
        $admin = LoginAdmin::where(
            'username',
            $request->email
        )->where(
            'password',
            $request->password
        )->first();

        if ($admin) {
            return redirect('/dashboardadmin');
        }

        // Cek pelanggan
        $pelanggan = LoginPelanggan::where(
            'email',
            $request->email
        )->where(
            'password',
            $request->password
        )->first();

        if ($pelanggan) {
            return redirect('/dashboard');
        }

        return back()->with(
            'error',
            'Email atau password salah'
        );
    }

    // LOGIN ADMIN
    public function loginAdmin(Request $request)
    {
        $admin = LoginAdmin::where(
            'username',
            $request->username
        )->where(
            'password',
            $request->password
        )->first();

        if ($admin) {
            return redirect('/dashboardadmin');
        }

        return back()->with(
            'error',
            'Username atau password salah'
        );
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
            ->with(
                'success',
                'Registrasi berhasil'
            );
    }
}