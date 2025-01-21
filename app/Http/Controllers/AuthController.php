<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ], [
            'username.required' => 'Username wajib diisi.',
            'password.required' => 'Password wajib diisi.'
        ]);
    
        // Proses login jika validasi berhasil
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->route('dashboard')->with('loginSuccess', 'Login berhasil! Selamat datang di dashboard.');
        }
    
        // Jika login gagal
        return back()->withErrors(['loginError' => 'Username atau password salah.']);
    }
    

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        // Menambahkan flash message
        return redirect()->route('login')->with('logout', 'Anda telah berhasil logout!');
    }
    
}
