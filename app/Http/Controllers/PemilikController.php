<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemilikController extends Controller
{
    public function home()
    {
        return view('pemilik.home');
    }
    public function profil()
    {
        return view('pemilik.profil');
    }
}
