<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarKerusakan extends Model
{
    use HasFactory;
    protected $table = 'gambar_kerusakan';
    protected $guarded = ['id'];
}
