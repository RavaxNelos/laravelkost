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

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kamar_kost_id', 'id');
    }

    public function scopeSearch($query, $term)
    {
       $term = "%$term%";
       $query->where(function ($query) use ($term) {
           $query->where('category', 'like', $term)
               ->orWhereHas('kamarkost', function ($query) use ($term) {
                   $query->where('alamat_kost', 'like', $term)
                    ->orWhere('alamat_kost', 'like', $term)
                    ->orWhere('ukuran_kost', 'like', $term)
                    ->orWhereHas('kategori', function ($query) use ($term) {
                        $query->where('kategori', 'like', $term)
                            ->orWhere('lokasi', 'like', $term);
                    });
               });
        });
    }
}
