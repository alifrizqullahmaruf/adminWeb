<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Logika autentikasi
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil
            return redirect('/home');
        }

        // Jika autentikasi gagal
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
