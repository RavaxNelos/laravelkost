<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KamarKost extends Model
{
    use HasFactory;
    protected $table = 'kamarkost';
    protected $guarded = ['id'];

    public function kategori() {
        return $this->belongsTo(Kategori::class, 'kategori_id','id');
    }

    /**
     * Get all of the favorites for the KamarKost
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function favorites(): HasMany
    {
        return $this->hasMany(Favorit::class, 'kamar_kost_id', 'id');
    }
}
