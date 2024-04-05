<?php

namespace App\Http\Controllers;

use App\Models\Jamkamarkost;
use Illuminate\Http\Request;

class JamkamarkostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jamkamarkost = Jamkamarkost::orderBy('created_at', 'desc')->get();
        return view('pemilikmin.jamkamarkost.jamkamarkost', [
            'jamkamarkost' => $jamkamarkost,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pemilikmin.jamkamarkost.tambahjamkamarkost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'jamkamar_kost' => 'required',
        ]);

        $jamkamarkost = new jamkamarkost();
        $jamkamarkost->jamkamar_kost = $request->jamkamar_kost;
        $jamkamarkost->save();

        return redirect()->route('jamkamarkost')->with('success', 'Jam Kamar Kost Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jamkamarkost $jamkamarkost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('pemilikmin.jamkamarkost.editjamkamarkost')->with([
            'jamkamarkost' => Jamkamarkost::find($id),
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'jamkamar_kost' => 'required',
        ]);

        $jamkamarkost = Jamkamarkost::find($request->id);
        $jamkamarkost->jamkamar_kost = $request->jamkamar_kost;
        $jamkamarkost->save();
        // return redirect()->route('admin.index')->with('success', 'Barang berhasil ditambahkan.');
        // return back()->with('success', 'Kamar Telah Ditambahkan.');
        return redirect()->route('jamkamarkost.store')->with('success', 'Jam Kamar Kost Berhasil Dirubah');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jamkamarkost = Jamkamarkost::find($id);
        $jamkamarkost->delete();

        return back()->with('success', 'Jam Kamar Kost Berhasil Dihapus');
    }
}
