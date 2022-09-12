<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function index(){
        return view('index');
    }

    public function cek_login(Request $request){
        $password = $request->input('password');
        $email = $request->input('email');

        if(Auth::attempt(['email' => $email, 'password' => $password])){
            return redirect()->intended('/laundry')->with('success', 'Login Berhasil');
        }else{
            return Redirect()->intended('/')->with('error', 'Email atau Password Salah');
        }

    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
