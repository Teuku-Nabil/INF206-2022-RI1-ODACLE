<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\RegisPasien;
use App\Models\PasienDaftar;
use Illuminate\Support\Facades\Auth;

class BerandaController extends Controller
{
    public function index()
    {
        return view('beranda');
    }

    public function berandadokter()
    {
        return view('dokter.beranda');
    }

    public function riwayat()
    {
        $regispasien = RegisPasien::where('nama', '=', Auth::user()->nama)->get();
        return view('user.riwayat-praktik', ['regispasien' => $regispasien]);
    }

    public function regis()
    {
        return view('user.pilih-spesialis');
    }

    public function jadwalpraktik()
    {
        $pasiendaftar = PasienDaftar::where('nama_dokter', '=', Auth::user()->nama)->get(); 
        return view('dokter.jadwal-saya', ['pasiendaftar' => $pasiendaftar]);
    }
    
    public function gigi()
    {
        return view('user.registrasi-gigi-anak');
    }

    public function ortodonsia()
    {
        return view('user.registrasi-ortodonsia');
    }

    public function periodonsia()
    {
        return view('user.registrasi-periodonsia');
    }

    public function radiologi()
    {
        return view('user.registrasi-radiologi-gigi');
    }

    public function regispasien(Request $request)
    {
        DB::table('regispasien')->insert([
            'nama'=>$request->nama,
            'nik'=>$request->nik,
            'dokter'=>$request->dokter,
            'waktu'=>$request->waktu,
            'keluhan'=>$request->keluhan,
            'tanggal'=>date("Y-m-d")
        ]);

        DB::table('pasiendaftar')->insert([
            'nama'=>Auth::user()->nama,
            'nik'=>Auth::user()->nik,
            'no_hp'=>Auth::user()->nohp,
            'tanggal'=>date('Y-m-d'),
            'nama_dokter'=>$request->dokter,
            'hari'=>date('l')
        ]);

        echo "<script>alert('Registrasi Berhasil');</script>";
        return redirect('/antrian');
    }

    public function antrian()
    {
        $regispasien = RegisPasien::where('nama', '=', Auth::user()->nama)->get();
        return view('user.antrian' , ['regispasien' => $regispasien]);
    }

    public function jadwal(){
        return view('user.jadwal');
    }
}
