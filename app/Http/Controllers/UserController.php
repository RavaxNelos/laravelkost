<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.home');
    }
    public function detailrumah()
    {
        return view('user.detail.index');
    }
    public function menujudetail()
    {
        return view('user.detail.index');
    }
    public function detail()
    {
        return view('user.home');
    }
    public function transaksi()
    {
        return view('user.transaksi.index');
    }
    public function konfirmasitransaksi()
    {
        return view('user.transaksi.konfirmasitransaksi');
    }
    public function back()
    {
        return view('user.detail.index');
    }

    public function kamar()
    {
        return view('user.kamar');
    }
    public function coba()
    {
        return view('coba');
    }
    public function kerusakan()
    {
        return view('user.laporkan.laporkankerusakan');
    }
    public function kehilangan()
    {
        return view('user.laporkan.laporkankehilangan');
    }
    public function riwayat()
    {
        return view('user.riwayat');
    }
    public function profil()
    {
        return view('user.profil');
    }
    public function favorit()
    {
        return view('user.kamarfavorit');
    }

}
