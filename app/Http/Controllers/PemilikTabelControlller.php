<?php

namespace App\Http\Controllers;

use App\Models\Pemilik;
use Illuminate\Http\Request;

class PemilikTabelControlller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemilik = Pemilik::orderBy('created_at', 'desc')->get();
        return view('pemilikmin.pemilik.pemilik', [
            'pemilik' => $pemilik,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pemilikmin.pemilik.tambahpemilik');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar_pemilik' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama_pemilik' => 'required',
            'email_pemilik' => 'required',
            'nomer_pemilik' => 'required',
        ]);

        $gambarBarang = $request->file('gambar_pemilik');
        $namaFile = time().'.'.$gambarBarang->getClientOriginalExtension();
        $gambarBarang->move(public_path('uploadkamar'), $namaFile);

        $pemilik = new Pemilik();
        $pemilik->nama_pemilik = $request->nama_pemilik;
        $pemilik->email_pemilik = $request->email_pemilik;
        $pemilik->nomer_pemilik = $request->nomer_pemilik;
        $pemilik->gambar_pemilik = $namaFile;
        $pemilik->save();

        return redirect()->route('pemilik')->with('success', 'Pemilik Berhasil Ditambahkan');
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
        return view('pemilikmin.pemilik.editpemilik')->with([
            'pemilik' => Pemilik::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'gambar_pemilik' => 'nullable',
            'nama_pemilik' => 'required',
            'email_pemilik' => 'required',
            'nomer_pemilik' => 'required',
        ]);

        if($request->gambar_pemilik) {
            $gambarBarang = $request->file('gambar_pemilik');
            $namaFile = time().'.'.$gambarBarang->getClientOriginalExtension();
            $gambarBarang->move(public_path('uploadkamar'), $namaFile);
        } else {
            $namaFile = Pemilik::find($request->id)->gambar_pemilik;
        }

        $pemilik = Pemilik::find($request->id);
        $pemilik->nama_pemilik = $request->nama_pemilik;
        $pemilik->email_pemilik = $request->email_pemilik;
        $pemilik->nomer_pemilik = $request->nomer_pemilik;
        // $pemilik->layanan_barang = $request->layanan_barang;
        $pemilik->gambar_pemilik = $namaFile;
        $pemilik->save();
        // return redirect()->route('admin.index')->with('success', 'Barang berhasil ditambahkan.');
        // return back()->with('success', 'Kamar Telah Ditambahkan.');
        return redirect()->route('pemilik.store')->with('success', 'Pemilik Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pemilik = Pemilik::find($id);
        $pemilik->delete();

        return back()->with('success', 'Pemilik Berhasil Dihapus');
    }
}
