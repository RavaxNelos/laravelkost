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

    public function store(Request $request)
    {
        $request->validate([
            'respon' => 'required|max:100', // Atur validasi sesuai kebutuhan Anda
        ]);

        // Simpan data respon ke dalam database
        $kerusakan = Kerusakan::where('id', $request->id)->first();
        $kerusakan->respon = $request->respon;
        $kerusakan->status = 'Laporan Diterima';
        $kerusakan->save();


        return redirect()->route('kerusakan')->with('success', 'Respon Berhasil Dikirm');
    }
}
