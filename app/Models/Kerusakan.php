<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerusakan extends Model
{
    use HasFactory;
    protected $guard = ['id'];
    protected $table = 'kerusakan';
    protected $fillable = ['user_id', 'nomer_kamar', 'tanggal_lapor', 'barang_rusak', 'gambar_rusak', 'status'];

    public function kamarkost()
    {
        return $this->belongsTo(KamarKost::class, 'nomer_kost', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function gambarkerusakan()
    {
        return $this->hasMany(GambarKerusakan::class, 'laporan_id', 'id');
    }
    // public function pembayaran()
    // {
    //     return $this->belongsTo(Pembayaran::class, 'pembayaran_dipilih', 'id');
    // }
}
