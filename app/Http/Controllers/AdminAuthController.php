<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    //
    function index()
    {
        $data = [
            'content' => 'home/auth/login'
        ];
        return view("home.layouts.wrapper", $data);
    }

    function doLogin(Request $request)
    {
        // Validasi input dengan minimum password 8 karakter
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8' // Minimal 8 karakter
        ], [
            'password.min' => 'Password harus minimal 8 karakter.'
        ]);

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect('admin/dashboard');
        }

        return back()->with('loginError', 'Gagal Login, Email atau Password tidak ditemukan');
    }

    function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }
}
