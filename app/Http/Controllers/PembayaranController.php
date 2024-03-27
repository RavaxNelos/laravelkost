<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pemilikmin.pembayaran.pembayaran', [
            'pembayaran' => Pembayaran::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pemilikmin.pembayaran.tambahpembayaran');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pembayaran' => 'required',
            'logo_pembayaran' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'kategori_pembayaran' => 'required',
            'nomer_pembayaran' => 'required',
            'atasnama_pembayaran' => 'required',
        ]);

        $gambarBarang = $request->file('logo_pembayaran');
        $namaFile = time().'.'.$gambarBarang->getClientOriginalExtension();
        $gambarBarang->move(public_path('uploadkamar'), $namaFile);

        $pembayaran = new Pembayaran();
        $pembayaran->nama_pembayaran = $request->nama_pembayaran;
        $pembayaran->kategori_pembayaran = $request->kategori_pembayaran;
        $pembayaran->nomer_pembayaran = $request->nomer_pembayaran;
        $pembayaran->atasnama_pembayaran = $request->atasnama_pembayaran;
        $pembayaran->logo_pembayaran = $namaFile;
        $pembayaran->save();

        return redirect()->route('bayar')->with('success', 'Metode Pembayaran Berhasil Ditambahkan');
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
        return view('pemilikmin.pembayaran.editpembayaran')->with([
            'pembayaran' => Pembayaran::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'logo_pembayaran' => 'nullable',
            'nama_pembayaran' => 'required',
            'kategori_pembayaran' => 'required',
            'nomer_pembayaran' => 'required',
            'atasnama_pembayaran' => 'required',
        ]);

        if($request->logo_pembayaran) {
            $gambarBarang = $request->file('logo_pembayaran');
            $namaFile = time().'.'.$gambarBarang->getClientOriginalExtension();
            $gambarBarang->move(public_path('uploadkamar'), $namaFile);
        } else {
            $namaFile = Pembayaran::find($request->id)->logo_pembayaran;
        }

        $pembayaran = Pembayaran::find($request->id);
        $pembayaran->nama_pembayaran = $request->nama_pembayaran;
        $pembayaran->kategori_pembayaran = $request->kategori_pembayaran;
        $pembayaran->nomer_pembayaran = $request->nomer_pembayaran;
        $pembayaran->atasnama_pembayaran = $request->atasnama_pembayaran;
        // $pembayaran->layanan_barang = $request->layanan_barang;
        $pembayaran->logo_pembayaran = $namaFile;
        $pembayaran->save();
        // return redirect()->route('admin.index')->with('success', 'Barang berhasil ditambahkan.');
        // return back()->with('success', 'Kamar Telah Ditambahkan.');
        return redirect()->route('pembayaran.store')->with('success', 'Metode Pembayaran Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pembayaran = Pembayaran::find($id);
        $pembayaran->delete();

        return back()->with('success', 'Metode Pembayaran Berhasil Dihapus');
    }
}
