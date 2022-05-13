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
            'nik' => 'required|unique:users',
            'tanggallahir' => 'required',
            'nohp' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5'
        ]);

        User::create($validatedData);
        $request->session()->flash('status', 'Pendaftaran berhasil! Silahkan login.');
        Return redirect('/login');
    }
}
