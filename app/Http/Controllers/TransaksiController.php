<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
          /**
     * Display a listing of the resource.
     */
    public function reject($id)
{
    $transaksi = Transaksi::find($id);

    if ($transaksi) {
        $transaksi->status = 'ditolak';
        $transaksi->pesan  = 'Kost Belum Dibayar';
        $transaksi->save();
        return redirect()->back()->with('success', 'Status pembayaran berhasil diubah');
    } else {
        return redirect()->back()->with('error', 'Transaksi tidak ditemukan.');
    }
}
   public function approve($id)
    {
          // Temukan transaksi berdasarkan ID
      $transaksi = Transaksi::find($id);

          // Periksa apakah transaksi ditemukan
      if ($transaksi) {
              // Ubah status transaksi menjadi "selesai"
          $transaksi->status = 'selesai';
          $transaksi->pesan  = 'Kost Sudah Terbayar';
          $transaksi->save();
         // Temukan pengguna terkait dengan transaksi
         $pengguna = $transaksi->user;

         // Periksa apakah pengguna ditemukan
         if ($pengguna) {
             // Ubah status pengguna menjadi "penghuni"
             $pengguna->status = 'Penghuni';
             $pengguna->save();
         }
              // Redirect kembali ke halaman sebelumnya dengan pesan sukses
          return redirect()->back()->with('success', 'Status pembayaran berhasil diubah');
      } else {
              // Jika transaksi tidak ditemukan, kembali dengan pesan error
          return redirect()->back()->with('error', 'Transaksi tidak ditemukan.');
      }
  }
    public function index()
    {
            // $selectedTime = Carbon::parse(session()->get('selectedDate'))->isoFormat('D MMMM Y') . ', ' . session()->get('waktu');
            // $time         = session()->get('getDate');
        $transaksi = Transaksi::orderBy('created_at', 'desc')->get();
        return view('pemilikmin.transaksi.transaksi', [
            'transaksi' => $transaksi,
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
              //
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
              //
    }

          /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
              //
    }

          /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
              //
    }
}
