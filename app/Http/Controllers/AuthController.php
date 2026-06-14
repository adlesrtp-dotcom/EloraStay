<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginAdmin;
use App\Models\LoginPelanggan;

class AuthController extends Controller
{
    // LOGIN ADMIN DAN PELANGGAN
    public function login(Request $request)
    {
        $login = $request->login;
        $password = $request->password;

        // CEK ADMIN
        $admin = LoginAdmin::where('username', $login)
            ->where('password', $password)
            ->first();

        if ($admin) {

            session([
                'login' => true,
                'role' => 'admin',
                'nama' => $admin->username
            ]);

            return redirect('/dashboardadmin');
        }

        // CEK PELANGGAN
        $pelanggan = LoginPelanggan::where('email', $login)
            ->where('password', $password)
            ->first();

        if ($pelanggan) {

            session([
                'login' => true,
                'role' => 'pelanggan',
                'nama' => $pelanggan->nama
            ]);

            return redirect('/dashboard');
        }

        return back()->with(
            'error',
            'Username/Email atau password salah'
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

    // LOGOUT
    public function logout()
    {
        session()->flush();

        return redirect('/login');
    }
}