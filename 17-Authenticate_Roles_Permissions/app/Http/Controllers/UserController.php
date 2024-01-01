<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        return view('dashboard');
    }

    public function login(){
        return view('login');
    }

    public function authenticate(Request $request){
        if(Auth::check()){
            // kullanıcı zaten giriş yapmışsa yönlendir.
            return redirect()->route('dashboard');
        }
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            // Doğrulama ve oturum açma başarılı ise
            return redirect()->route('dashboard');
        } else {
            // Oturum açma başarısız ise
            return redirect()->back()->with('error', 'Kullanıcı adı veya şifre yanlış');
        }
    }

    public function logout(){
        // Kullanıcının oturumunu sonlandırır.
        Auth::logout();
        return redirect()->route('login');
    }
}
