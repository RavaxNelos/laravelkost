<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemilikMinController extends Controller
{
    //
    public function dashboard() {
        return view('pemilikmin.dashboard.dashboard');
    }

    public function kamar() {
        return view('pemilikmin.kamar.kamar');
    }
    public function transaksi() {
        return view('pemilikmin.transaksi.transaksi');
    }
    public function banner() {
        return view('pemilikmin.banner.banner');
    }
    public function tambahkamar() {
        return view('pemilikmin.kamar.tambahkamar');
    }
}
