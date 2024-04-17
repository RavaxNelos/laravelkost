<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorit extends Model
{
    use HasFactory;
    protected $table = 'favorit';
    protected $guarded = ['id'];

    public function kamarkost()
    {
        return $this->belongsTo(KamarKost::class, 'kamar_kost_id', 'id');
    }
}
