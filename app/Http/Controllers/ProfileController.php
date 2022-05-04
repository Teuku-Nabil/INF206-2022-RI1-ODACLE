<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class ProfileController extends Controller
{
    public function index()
    {
        return view('user.profil');
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $this->validate($request, [
            "nama" => "required|string|max:255",
            "nik" => "required",
            "tanggallahir" => "required",
            "nohp" => "required",
            "email" => "required|string|email|max:255|unique:users,email,".$user->id,
            "image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048"
        ]);
        $user->update($request->all());
        Session::flash('flash_message', 'Profil berhasil diupdate.');
        return redirect()->route('profil.index');
    }

    public function edit(Request $request)
    {
        return view('user.updateprofil', [
            'user' => $request->user()
        ]);
    }
}