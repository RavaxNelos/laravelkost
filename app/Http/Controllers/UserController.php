<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function detailrumah()
    {
        return view('detail.index');
    }
    public function menujudetail()
    {
        return view('detail.index');
    }
    public function detail()
    {
        return view('home');
    }
    public function transaksi()
    {
        return view('transaksi.index');
    }
    public function back()
    {
        return view('detail.index');
    }
    public function bayar()
    {
        return view('transaksi.checkout');
    }
}
