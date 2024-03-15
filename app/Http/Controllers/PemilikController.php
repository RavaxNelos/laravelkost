<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemilikController extends Controller
{
    public function home()
    {
        return view('pemilik.home');
    }
    public function area()
    {
        return view('pemilik.areakost');
    }
    public function transaksi()
    {
        return view('pemilik.transaksi');
    }
    public function pengguna()
    {
        return view('pemilik.pengguna');
    }
    public function riwayat()
    {
        return view('pemilik.riwayat');
    }
    public function profil()
    {
        return view('pemilik.profil');
    }
}
