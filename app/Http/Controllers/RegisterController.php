<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class RegisterController extends Controller
{
    public function daftar()
    {
        return view('daftar');
    }

    public function simpan(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'tanggallahir' => 'required',
            'nohp' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/user-login')->with('status', 'Pendaftaran berhasil! Silahkan login.');
    }
}
