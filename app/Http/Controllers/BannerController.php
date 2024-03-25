<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return view('pemilikmin.banner.banner', [
            'banner' => Banner::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pemilikmin.banner.tambahbanner');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar_banner' => 'required|image|mimes:jpeg,png,jpg,gif|max:4048',
            'kategori_banner' => 'required',
            'lokasi_banner' => 'required',
            'status_banner' => 'required',
        ]);

        $gambarBarang = $request->file('gambar_banner');
        $namaFile = time().'.'.$gambarBarang->getClientOriginalExtension();
        $gambarBarang->move(public_path('uploadkamar'), $namaFile);

        $banner = new Banner();
        $banner->gambar_banner = $namaFile;
        $banner->kategori_banner = $request->kategori_banner;
        $banner->lokasi_banner = $request->lokasi_banner;
        $banner->status_banner = $request->status_banner;
        $banner->save();

        return redirect()->route('banner')->with('success', 'Kamar Berhasil Ditambahkan');
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
        return view('pemilikmin.banner.editbanner')->with([
            'banner' => Banner::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'gambar_banner' => 'nullable',
            'kategori_banner' => 'required',
            'lokasi_banner' => 'required',
            'status_banner' => 'required',
        ]);

        if($request->gambar_banner) {
            $gambarBarang = $request->file('gambar_banner');
            $namaFile = time().'.'.$gambarBarang->getClientOriginalExtension();
            $gambarBarang->move(public_path('uploadkamar'), $namaFile);
        } else {
            $namaFile = Banner::find($request->id)->gambar_banner;
        }

        $banner = Banner::find($request->id);
        $banner->gambar_banner   = $namaFile;
        $banner->kategori_banner = $request->kategori_banner;
        $banner->lokasi_banner = $request->lokasi_banner;
        $banner->status_banner = $request->status_banner;
        $banner->save();
        // return redirect()->route('admin.index')->with('success', 'Barang berhasil ditambahkan.');
        // return back()->with('success', 'Kamar Telah Ditambahkan.');
        return redirect()->route('banner.store')->with('success', 'Kamar Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $banner = Banner::find($id);
        $banner->delete();

        return back()->with('success', 'Kamar Berhasil Dihapus');
    }
}
