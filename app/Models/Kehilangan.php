<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kehilangan extends Model
{
    use HasFactory;
    protected $table = 'kehilangan';
    protected $guard = ['id'];
    protected $fillable = ['user_id', 'nomer_kamar', 'lokasi_hilang', 'barang_hilang', 'tanggal_hilang', 'jam_hilang', 'keterangan'];
    public function kamarkost()
    {
        return $this->belongsTo(KamarKost::class, 'nomer_kost', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
