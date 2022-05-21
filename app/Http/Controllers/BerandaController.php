<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('user.riwayat-praktik');
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
}
