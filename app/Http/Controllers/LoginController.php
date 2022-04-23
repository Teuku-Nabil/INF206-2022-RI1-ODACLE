<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('welcome');
        }else{
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::Attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('welcome');
        }

        return back()->with('error', 'Email atau Password salah');
    }
}