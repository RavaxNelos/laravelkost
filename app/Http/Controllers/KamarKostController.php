<?php

namespace App\Http\Controllers;

use App\Models\KamarKost;
use Illuminate\Http\Request;

class KamarKostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return view('admin.kamar.kamar', [
            'kamarkost' => KamarKost::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kamar.tambahkamar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar_kost' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama_kost' => 'required',
            'harga_kost' => 'required',
            'lokasi_kost' => 'required',
            'ukuran_kost' => 'required',
        ]);
        $gambarBarang = $request->file('gambar_kost');
        $namaFile = time().'.'.$gambarBarang->getClientOriginalExtension();
        $gambarBarang->move(public_path('uploads'), $namaFile);

        $kamarkost = new KamarKost();
        $kamarkost->nama_kost = $request->nama_kost;
        $kamarkost->harga_kost = $request->harga_kost;
        $kamarkost->lokasi_kost = $request->lokasi_kost;
        $kamarkost->ukuran_kost = $request->ukuran_kost;
        // $kamarkost->layanan_barang = $request->layanan_barang;
        $kamarkost->gambar_kost = $namaFile;
        $kamarkost->save();
        // return redirect()->route('admin.index')->with('success', 'Barang berhasil ditambahkan.');
        // return back()->with('success', 'Kamar Telah Ditambahkan.');
        return redirect()->route('kamar.store')->with('success', 'Kamar Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}