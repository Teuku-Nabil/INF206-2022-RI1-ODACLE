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
            return redirect('/beranda');
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

        if (Auth::Attempt($credentials) && $level = Auth::user()->level == 'pasien') {
            $request->session()->regenerate();
            return redirect()->intended('/beranda');
        }elseif (Auth::Attempt($credentials) && $level = Auth::user()->level == 'dokter') {
            $request->session()->regenerate();
            return redirect()->intended('/beranda-dokter');
        }
        return back()->with('error', 'Email atau Password salah');
    }
    
    public function logoutpasien()
    {
        Auth::logout();
        return redirect('login');
    }

    public function logoutdokter()
    {
        Auth::logout();
        return redirect('login');
    }
}
