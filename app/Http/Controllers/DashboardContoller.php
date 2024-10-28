<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardContoller extends Controller
{
    
public function index()
{
    $jumlahPengguna = User::where('status', 'Pengguna')->count();
    return view('dashboard', compact('jumlahPengguna'));
}
}
