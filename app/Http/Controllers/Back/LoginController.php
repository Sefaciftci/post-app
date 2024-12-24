<?php

namespace App\Http\Controllers\Back;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('backend.auth.login');
    }


    public function loginPost(Request $request){

        // Validate the input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
    
         // Attempt to log the user in
         if (Auth::attempt($credentials)) {
            // Regenerate session to prevent session fixation attacks
            return redirect()->route('dashboard');
            }
            return redirect()->route('login')->withErrors('Email adresi veya şifre hatalı');
        }

        
        public function logoutGet(){
            Auth::logout();
            return redirect()->route('login');
        }

}