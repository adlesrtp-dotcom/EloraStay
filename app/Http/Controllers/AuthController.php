<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        // login admin
        if ($email == 'admin@gmail.com' && $password == 'admin123') {
            return redirect('/dashboard');
        }

        // login pelanggan
        return redirect('/');
    }
}