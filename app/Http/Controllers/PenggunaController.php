<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pemilikmin.pengguna.pengguna', [
            'users' => Pengguna::all(),
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
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required',
            'email' => 'required',
            'nomorhp' => 'required',
            'password' => 'nullable',
        ]);

        $gambarBarang = $request->file('gambar');
        $namaFile = time().'.'.$gambarBarang->getClientOriginalExtension();
        $gambarBarang->move(public_path('uploadkamar'), $namaFile);

       $users = new Pengguna();
       $users->password = Hash::make('12345678');
       $users->name = $request->name;
       $users->email = $request->email;
       $users->nomorhp = $request->nomorhp;
       $users->gambar = $namaFile;
       $users->role_id = 4;
       $users->save();

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
            'users' => Pengguna::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'gambar' => 'nullable',
            'name' => 'required',
            'email' => 'required',
            'nomorhp' => 'required',
        ]);

        if($request->gambar) {
            $gambarBarang = $request->file('gambar');
            $namaFile = time().'.'.$gambarBarang->getClientOriginalExtension();
            $gambarBarang->move(public_path('uploadkamar'), $namaFile);
        } else {
            $namaFile = Pengguna::find($request->id)->gambar;
        }

        $users = Pengguna::find($request->id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->nomorhp = $request->nomorhp;
        // $users->layanan_barang = $request->layanan_barang;
        $users->gambar = $namaFile;
        $users->save();
        // return redirect()->route('admin.index')->with('success', 'Barang berhasil ditambahkan.');
        // return back()->with('success', 'Kamar Telah Ditambahkan.');
        return redirect()->route('pengguna.store')->with('success', 'Kamar Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = Pengguna::find($id);
        $users->delete();

        return back()->with('success', 'Kamar Berhasil Dihapus');
    }
}
