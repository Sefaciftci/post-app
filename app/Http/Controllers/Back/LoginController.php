<?php

namespace App\Http\Controllers\Back;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('backend.auth.login');
    }

    public function loginPost(Request $request)
    {
        // Gelen veriyi doğrula
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Giriş yapmayı dene
        if (Auth::attempt($credentials)) {
            // Oturum sabitleme saldırılarını önlemek için oturumu yenile
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        // Hatalı giriş durumunda geri dön
        return redirect()->route('login')->withErrors(['email' => 'Email adresi veya şifre hatalı.']);
    }

    public function logoutGet(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}