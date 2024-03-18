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
}
