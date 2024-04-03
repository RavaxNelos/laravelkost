<?php

namespace App\Http\Controllers;

use App\Models\KamarKost;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KamarKostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $categories = Kategori::where('lokasi', 'Kategori Kost')->get();
        $kamarkost = KamarKost::orderBy('created_at', 'desc')->get();
        return view('pemilikmin.kamar.kamar', [
            'kamarkost' => $kamarkost, 'categories' => $categories
        ]);
    }

    public function toggleStatus($id) {
        $kamarkost = KamarKost::find($id);
        $kamarkost->status_kost = $kamarkost->status_kost == 'Publish' ? 'Unpublish' : 'Publish';
        $kamarkost->save();

        return back()->with('success', 'Status Berhasil Dirubah');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $kategori = Kategori::where('lokasi', 'Kamar');
        return view('pemilikmin.kamar.tambahkamar',  ['kategori' => $kategori]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'gambar_kost' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'kategori_id' => 'required',
        'harga_kost' => 'required',
        'alamat_kost' => 'required',
        'ukuran_kost' => 'required',
        'tipe_kost' => 'required',
        'status_kost' => 'required',
        'fasilitas_kost' => 'required',
        'lokasi_kost' => 'required',
        'air_kost' => 'required',
        'listrik_kost' => 'required',
        'alamat_lengkap_kost' => 'required',
    ]);

    $gambarBarang = $request->file('gambar_kost');
    $namaFile = time().'.'.$gambarBarang->getClientOriginalExtension();
    $gambarBarang->move(public_path('uploadkamar'), $namaFile);

    $kamarkost = new KamarKost();
    $kamarkost->kategori_id = $request->kategori_id;
    $kamarkost->harga_kost = $request->harga_kost;
    $kamarkost->alamat_kost = $request->alamat_kost;
    $kamarkost->ukuran_kost = $request->ukuran_kost;
    $kamarkost->tipe_kost = $request->tipe_kost;
    $kamarkost->status_kost = $request->status_kost;
    $kamarkost->fasilitas_kost = $request->fasilitas_kost;
    $kamarkost->lokasi_kost = $request->lokasi_kost;
    $kamarkost->air_kost = $request->air_kost;
    $kamarkost->listrik_kost = $request->listrik_kost;
    $kamarkost->alamat_lengkap_kost = $request->alamat_lengkap_kost;
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
        $categories = Kategori::where('lokasi', 'Kategori Kost')->get();
        return view('pemilikmin.kamar.editkamar')->with([
            'kamarkost' => KamarKost::find($id), 'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'gambar_kost' => 'nullable',
            'kategori_id' => 'required',
            'harga_kost' => 'required',
            'alamat_kost' => 'required',
            'ukuran_kost' => 'required',
            'tipe_kost' => 'required',
            'status_kost' => 'required',
            'fasilitas_kost' => 'required',
            'lokasi_kost' => 'required',
            'air_kost' => 'required',
            'listrik_kost' => 'required',
            'alamat_lengkap_kost' => 'required',
        ]);

        if($request->gambar_kost) {
            $gambarBarang = $request->file('gambar_kost');
            $namaFile = time().'.'.$gambarBarang->getClientOriginalExtension();
            $gambarBarang->move(public_path('uploadkamar'), $namaFile);
        } else {
            $namaFile = KamarKost::find($request->id)->gambar_kost;
        }

        $kamarkost = KamarKost::find($request->id);
        $kamarkost->kategori_id = $request->kategori_id;
        $kamarkost->harga_kost = $request->harga_kost;
        $kamarkost->alamat_kost = $request->alamat_kost;
        $kamarkost->ukuran_kost = $request->ukuran_kost;
        $kamarkost->tipe_kost = $request->tipe_kost;
        $kamarkost->status_kost = $request->status_kost;
        $kamarkost->fasilitas_kost = $request->fasilitas_kost;
        $kamarkost->lokasi_kost = $request->lokasi_kost;
        $kamarkost->air_kost = $request->air_kost;
        $kamarkost->listrik_kost = $request->listrik_kost;
        $kamarkost->alamat_lengkap_kost = $request->alamat_lengkap_kost;
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
        $kamarkost = KamarKost::find($id);
        $kamarkost->delete();

        return back()->with('success', 'Kamar Berhasil Dihapus');
    }
}