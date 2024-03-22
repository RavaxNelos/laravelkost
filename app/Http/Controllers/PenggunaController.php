<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pemilikmin.pengguna.pengguna', [
            'pengguna' => Pengguna::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pemilikmin.pengguna.tambahpengguna');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar_pengguna' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama_pengguna' => 'required',
            'email_pengguna' => 'required',
            'nomer_pengguna' => 'required',
        ]);

        $gambarBarang = $request->file('gambar_pengguna');
        $namaFile = time().'.'.$gambarBarang->getClientOriginalExtension();
        $gambarBarang->move(public_path('uploadkamar'), $namaFile);

        $pengguna = new Pengguna();
        $pengguna->nama_pengguna = $request->nama_pengguna;
        $pengguna->email_pengguna = $request->email_pengguna;
        $pengguna->nomer_pengguna = $request->nomer_pengguna;
        $pengguna->gambar_pengguna = $namaFile;
        $pengguna->save();

        return redirect()->route('pengguna')->with('success', 'Kamar Berhasil Ditambahkan');
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
        return view('pemilikmin.pengguna.editpengguna')->with([
            'pengguna' => Pengguna::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'gambar_pengguna' => 'nullable',
            'nama_pengguna' => 'required',
            'email_pengguna' => 'required',
            'nomer_pengguna' => 'required',
        ]);

        if($request->gambar_pengguna) {
            $gambarBarang = $request->file('gambar_pengguna');
            $namaFile = time().'.'.$gambarBarang->getClientOriginalExtension();
            $gambarBarang->move(public_path('uploadkamar'), $namaFile);
        } else {
            $namaFile = Pengguna::find($request->id)->gambar_pengguna;
        }

        $pengguna = Pengguna::find($request->id);
        $pengguna->nama_pengguna = $request->nama_pengguna;
        $pengguna->email_pengguna = $request->email_pengguna;
        $pengguna->nomer_pengguna = $request->nomer_pengguna;
        // $pengguna->layanan_barang = $request->layanan_barang;
        $pengguna->gambar_pengguna = $namaFile;
        $pengguna->save();
        // return redirect()->route('admin.index')->with('success', 'Barang berhasil ditambahkan.');
        // return back()->with('success', 'Kamar Telah Ditambahkan.');
        return redirect()->route('pengguna.store')->with('success', 'Kamar Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengguna = Pengguna::find($id);
        $pengguna->delete();

        return back()->with('success', 'Kamar Berhasil Dihapus');
    }
}
