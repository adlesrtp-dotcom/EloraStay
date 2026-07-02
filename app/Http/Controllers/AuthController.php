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

        // Simpan data user ke session
        session([
            'login'   => true,
            'user_id' => $user->id,
            'role'    => $user->role,
            'nama'    => $user->name
        ]);

        // Redirect berdasarkan role
        if ($user->role == 'admin') {
            return redirect('/dashboardadmin');
        }

        return redirect('/dashboard');
    }

    // REGISTER
    public function register(Request $request)
    {
        User::create([
            'name'     => $request->nama,
            'email'    => $request->email,
            'telepon'  => $request->telepon,
            'password' => $request->password,
            'role'     => 'pelanggan'
        ]);

        return redirect('/login')
            ->with('success', 'Registrasi berhasil');
    }

    // ===========================
    // LUPA PASSWORD
    // ===========================

    public function checkPassword(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'telepon'  => 'required'
        ]);

        $user = User::where('email', $request->email)
                    ->where('telepon', $request->telepon)
                    ->first();

        if (!$user) {
            return back()->with(
                'error',
                'Email atau nomor HP tidak sesuai.'
            );
        }

        return redirect()->route('password.reset', $user->id);
    }

    public function showResetPassword($id)
    {
        $user = User::findOrFail($id);

        return view('reset-password', compact('user'));
    }

    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'password' => 'required|min:6|confirmed'
        ]);

        $user = User::findOrFail($id);

        $user->password = $request->password;
        $user->save();

        return redirect('/login')
            ->with('success', 'Password berhasil diubah.');
    }

    // LOGOUT
    public function logout()
    {
        session()->flush();

        return redirect('/login');
    }
}