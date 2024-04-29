<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\KamarKostFasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fasilitas = Fasilitas::orderBy('created_at', 'desc')->get();
        return view('pemilikmin.fasilitas.fasilitas', [
            'fasilitas' => $fasilitas,
        ]);
    }

      /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          //
    }

      /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'      => 'required',
            'tipe'      => 'required',
            'deskripsi' => 'required',
            'gambar'    => 'required|image|mimes:jpeg,png,jpg,gif|max:6048',
        ]);

        $gambarBarang = $request->file('gambar');
        $namaFile     = time().'.'.$gambarBarang->getClientOriginalExtension();
        $gambarBarang->move(public_path('uploadkamar'), $namaFile);

        $fasilitas                = new Fasilitas();
        $fasilitas->gambar = $namaFile;
        $fasilitas->nama          = $request->nama;
        $fasilitas->tipe          = $request->tipe;
        $fasilitas->deskripsi     = $request->deskripsi;
        $fasilitas->save();

        return redirect()->route('fasilitas')->with('success', 'Fasilitas Berhasil Ditambahkan');
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

    }

      /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'gambar'    => 'nullable',
            'nama'      => 'required',
            'tipe'      => 'required',
            'deskripsi' => 'required',
        ]);

        if($request->gambar) {
            $gambarBarang = $request->file('gambar');
            $namaFile     = time().'.'.$gambarBarang->getClientOriginalExtension();
            $gambarBarang->move(public_path('uploadkamar'), $namaFile);
        } else {
            $namaFile = Fasilitas::find($request->id)->gambar;
        }

        $fasilitas            = Fasilitas::find($request->id);
        $fasilitas->nama      = $request->nama;
        $fasilitas->tipe      = $request->tipe;
        $fasilitas->deskripsi = $request->deskripsi;
        $fasilitas->gambar    = $namaFile;
        $fasilitas->save();
          // return redirect()->route('admin.index')->with('success', 'Barang berhasil ditambahkan.');
          // return back()->with('success', 'Kamar Telah Ditambahkan.');
        return redirect()->route('fasilitas.store')->with('success', 'Fasilitas Berhasil Dirubah');
    }

      /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fasilitas = Fasilitas::find($id);
        $relasi = KamarKostFasilitas::where('fasilitas_id', $fasilitas);
        $relasi->delete();
        $fasilitas->delete();

        return back()->with('success', 'Fasilitas Berhasil Dihapus');
    }
}
