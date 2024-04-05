<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jamkamarkost extends Model
{
    use HasFactory;
    protected $table = 'jamkamarkost';
    protected $guard = ['id'];
}
