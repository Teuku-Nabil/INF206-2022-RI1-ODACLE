<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LogindokterController extends Controller
{
    public function logindokter ()
    {
        if (Auth::check()) {
            return redirect('/beranda');
        }else{
            return view('logindokter');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)){
            return redirect('beranda');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('logindokter');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('logindokter');
    }
}
