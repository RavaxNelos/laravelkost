<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gambarKamarKostKamu extends Model
{
    use HasFactory;
    protected $table = 'gambar_kamar_kost_kamu';
    protected $guard = ['id'];

    public function kamarkost() {
        return $this->belongsTo(KamarKost::class, 'kamar_id', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function transaksi() {
        return $this->belongsTo(Transaksi::class, 'kamar_id', 'id');
    }
}
