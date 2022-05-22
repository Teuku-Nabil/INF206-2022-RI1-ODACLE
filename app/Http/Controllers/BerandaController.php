<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\RegisPasien;

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
        $regispasien = RegisPasien::select('*')->get();
        return view('user.riwayat-praktik', compact('regispasien'));
    }

    public function regis()
    {
        return view('user.pilih-spesialis');
    }

    public function jadwalpraktik()
    {
        return view('dokter.jadwal-saya');
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
            'keluhan'=>$request->keluhan
        ]);
        echo "<script>alert('Registrasi Berhasil');</script>";
        return redirect('/antrian');
    }

    public function antrian()
    {
        $regispasien = RegisPasien::select('*')->get();
        return view('user.antrian' , compact('regispasien'));
    }

    public function jadwal(){
        return view('user.jadwal');
    }
}
