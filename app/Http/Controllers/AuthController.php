<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   
    public function showLoginForm(){
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Login berhasil
            return redirect()->intended('/admin/index');
        } else {
            // Login gagal
            return redirect()->back()->withErrors(['email' => 'Email atau password salah.']);
        }
    }
}
