<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard() {
        return view('admin.dashboard.dashboard');
    }

    public function kamar() {
        return view('admin.kamar.kamar');
    }
    public function transaksi() {
        return view('admin.transaksi.transaksi');
    }
    public function banner() {
        return view('admin.banner.banner');
    }
    public function tambahkamar() {
        return view('admin.kamar.tambahkamar');
    }
}
