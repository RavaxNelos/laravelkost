<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kehilangan extends Model
{
    use HasFactory;
    protected $table = 'kehilangan';
    protected $guard = ['id'];
}
