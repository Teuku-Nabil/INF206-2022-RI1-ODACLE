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

    public function profildokter()
    {
        return view('dokter.profil');
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $this->validate($request, [
            "nama" => "required|string|max:255",
            "nik" => "required",
            "tanggallahir" => "required",
            "nohp" => "required",
            "email" => "required|string|email|max:255|unique:users,email,".$user->id
        ]);
        $user->update($request->all());
        Session::flash('flash_message', 'Profil berhasil diupdate.');
        return redirect()->route('profil.index');
    }

    public function updatedokter(Request $request)
    {
        $user = Auth::user();
        $this->validate($request, [
            "nama" => "required|string|max:255",
            "nik" => "required",
            "tanggallahir" => "required",
            "nohp" => "required",
            "email" => "required|string|email|max:255|unique:users,email,".$user->id
        ]);
        $user->update($request->all());
        Session::flash('flash_message', 'Profil berhasil diupdate.');
        return redirect()->route('profil.dokter');
    }

    public function edit(Request $request)
    {
        return view('user.updateprofil', [
            'user' => $request->user()
        ]);
    }

    public function ubah(Request $request)
    {
        return view('dokter.updateprofil', [
            'user' => $request->user()
        ]);
    }

    public function foto()
    {
        return view('user.foto');
    }
    
    public function fotodokter()
    {
        return view('dokter.foto');
    }

    public function upload(Request $request)
    {
        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $request->image->move(public_path('assets/images/'), $filename);
            Auth()->user()->update(['image'=>$filename]);
            
            return redirect()->route('profil.index');
        }
        return redirect()->back();
    }
    
    public function uploaddokter(Request $request)
    {
        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $request->image->move(public_path('assets/profildokter/'), $filename);
            Auth()->user()->update(['image'=>$filename]);
            
            return redirect()->route('profil.dokter');
        }
        return redirect()->back();
    }
}