<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function daftar(){
        return view('daftar');
    }

    public function simpan(Request $request){
        $validatedData = $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'tanggal-lahir' => 'required',
            'no-hp' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        User::create($validatedData);
    }
}
