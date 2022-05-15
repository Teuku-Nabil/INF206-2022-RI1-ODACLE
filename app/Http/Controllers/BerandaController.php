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
        return view('user.registrasi');
    }
}
