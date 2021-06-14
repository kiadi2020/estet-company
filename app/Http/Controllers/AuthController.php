<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function register() {

        return view('register');
    }
    public function showReg(Request $request) {
        User::create([
           'email'=>$request->email,
           'login'=>$request->login,
           'password'=>Hash::make ($request->password),
        ]);
        return view('home');
    }
    public function login(){
        return view('login');
    }
    public function showLog(Request $request){
        Auth::attempt([
            'login'=>$request->login,
            'password'=>$request->password,
        ]);
        return view('home');
    }
    public function logout(){
        Auth::logout();
        return view('home');
    }
}
