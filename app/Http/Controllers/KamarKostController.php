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
        'kategori_kost' => 'required',
        'harga_kost' => 'required',
        'lokasi_kost' => 'required',
        'ukuran_kost' => 'required',
        'status_kost' => 'required',
    ]);

    $gambarBarang = $request->file('gambar_kost');
    $namaFile = time().'.'.$gambarBarang->getClientOriginalExtension();
    $gambarBarang->move(public_path('uploadkamar'), $namaFile);

    $kamarkost = new KamarKost();
    $kamarkost->kategori_kost = $request->kategori_kost;
    $kamarkost->harga_kost = $request->harga_kost;
    $kamarkost->lokasi_kost = $request->lokasi_kost;
    $kamarkost->ukuran_kost = $request->ukuran_kost;
    $kamarkost->status_kost = $request->status_kost;
    $kamarkost->gambar_kost = $namaFile;
    $kamarkost->save();

    return redirect()->route('kamar')->with('success', 'Kamar Berhasil Ditambahkan');
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
        return view('admin.kamar.editkamar')->with([
            'kamarkost' => KamarKost::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'gambar_kost' => 'nullable',
            'kategori_kost' => 'required',
            'harga_kost' => 'required',
            'lokasi_kost' => 'required',
            'ukuran_kost' => 'required',
            'status_kost' => 'required',
        ]);

        if($request->gambar_kost) {
            $gambarBarang = $request->file('gambar_kost');
            $namaFile = time().'.'.$gambarBarang->getClientOriginalExtension();
            $gambarBarang->move(public_path('uploads'), $namaFile);
        } else {
            $namaFile = KamarKost::find($request->id)->gambar_kost;
        }

        $kamarkost = KamarKost::find($request->id);
        $kamarkost->kategori_kost = $request->kategori_kost;
        $kamarkost->harga_kost = $request->harga_kost;
        $kamarkost->lokasi_kost = $request->lokasi_kost;
        $kamarkost->ukuran_kost = $request->ukuran_kost;
        $kamarkost->status_kost = $request->status_kost;
        // $kamarkost->layanan_barang = $request->layanan_barang;
        $kamarkost->gambar_kost = $namaFile;
        $kamarkost->save();
        // return redirect()->route('admin.index')->with('success', 'Barang berhasil ditambahkan.');
        // return back()->with('success', 'Kamar Telah Ditambahkan.');
        return redirect()->route('kamar.store')->with('success', 'Kamar Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kamar = KamarKost::find($id);
        $kamar->delete();

        return back()->with('success', 'Kamar Berhasil Dihapus');
    }
}