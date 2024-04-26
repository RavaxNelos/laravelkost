<?php

namespace App\Http\Controllers;

use App\Models\Kehilangan;
use Illuminate\Http\Request;

class KehilanganController extends Controller
{
    public function index()
    {
            // $selectedTime = Carbon::parse(session()->get('selectedDate'))->isoFormat('D MMMM Y') . ', ' . session()->get('waktu');
            // $time         = session()->get('getDate');
        $kehilangan = Kehilangan::orderBy('created_at', 'desc')->get();
        return view('pemilikmin.laporkan.laporkankehilangan', [
            'kehilangan' => $kehilangan,
        ]);
    }
}
