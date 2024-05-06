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

    public function store(Request $request)
    {
        $request->validate([
            'respon' => 'required|max:100', // Atur validasi sesuai kebutuhan Anda
        ]);

        // Simpan data respon ke dalam database
        $kehilangan = Kehilangan::where('id', $request->id)->first();
        $kehilangan->respon = $request->respon;
        $kehilangan->status = 'Laporan Diterima';
        $kehilangan->save();


        return redirect()->route('kehilangan')->with('success', 'Respon Berhasil Dikirm');
    }
}
