<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    // LOGIN
    public function login(Request $request)
    {
        $login = $request->login;
        $password = $request->password;

        $user = User::where('email', $login)
            ->where('password', $password)
            ->first();

        if (!$user) {
            return back()->with(
                'error',
                'Email atau password salah'
            );
        }

        session([
            'login' => true,
            'role' => $user->role,
            'nama' => $user->name
        ]);

        if ($user->role == 'admin') {
            return redirect('/dashboardadmin');
        }

        return redirect('/dashboard');
    }

    // REGISTER
   public function register(Request $request)
{
    User::create([
        'name' => $request->nama,
        'email' => $request->email,
        'telepon' => $request->telepon,
        'password' => $request->password,
        'role' => 'pelanggan'
    ]);

    return redirect('/login')
        ->with('success', 'Registrasi berhasil');
}

    // LOGOUT
    public function logout()
    {
        session()->flush();

        return redirect('/login');
    }
}