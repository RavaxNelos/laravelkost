<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::orderBy('created_at', 'desc')->get();
        return view('pemilikmin.kategori.kategori', [
            'kategori' => $kategori,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pemilikmin.kategori.tambahkategori');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
            'lokasi' => 'required',
        ]);

        $kategori = new Kategori();
        $kategori->kategori = $request->kategori;
        $kategori->lokasi = $request->lokasi;
        $kategori->save();

        return redirect()->route('kategori')->with('success', 'Kategori Berhasil Ditambahkan');
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
        return view('pemilikmin.kategori.editkategori')->with([
            'kategori' => Kategori::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
            'lokasi' => 'required',
        ]);

        $kategori = Kategori::find($request->id);
        $kategori->kategori = $request->kategori;
        $kategori->lokasi = $request->lokasi;
        $kategori->save();
        // return redirect()->route('admin.index')->with('success', 'Barang berhasil ditambahkan.');
        // return back()->with('success', 'Kamar Telah Ditambahkan.');
        return redirect()->route('kategori.store')->with('success', 'Kategori Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();

        return back()->with('success', 'Kategori Berhasil Dihapus');
    }
}
