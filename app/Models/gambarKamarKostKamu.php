<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gambarKamarKostKamu extends Model
{
    use HasFactory;
    protected $table = 'gambar_kamar_kost_kamu';
    protected $guard = ['id'];

    public function kamar() {
        return $this->belongsTo(KamarKost::class, 'kamar_id', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
