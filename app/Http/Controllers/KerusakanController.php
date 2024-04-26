<?php

namespace App\Http\Controllers;

use App\Models\Kerusakan;
use Illuminate\Http\Request;

class KerusakanController extends Controller
{
    public function index()
    {
            // $selectedTime = Carbon::parse(session()->get('selectedDate'))->isoFormat('D MMMM Y') . ', ' . session()->get('waktu');
            // $time         = session()->get('getDate');
        $kerusakan = Kerusakan::orderBy('created_at', 'desc')->get();
        return view('pemilikmin.laporkan.laporkankerusakan', [
            'kerusakan' => $kerusakan,
        ]);
    }
}
