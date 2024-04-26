<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerusakan extends Model
{
    use HasFactory;
    protected $table = 'kerusakan';
    protected $guard = ['id'];
    protected $fillable = ['nama', 'nomer_kamar', 'tanggal_lapor', 'barang_rusak', 'gambar_rusak', 'keterangan'];

    public function kamarkost()
    {
        return $this->belongsTo(KamarKost::class, 'nomer_kamar', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'nama', 'id');
    }
    // public function pembayaran()
    // {
    //     return $this->belongsTo(Pembayaran::class, 'pembayaran_dipilih', 'id');
    // }
}
