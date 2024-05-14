<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class LoginAdmin extends Authenticatable
{
    use HasFactory, HasApiTokens;
    protected $table = 'login_admin';
    protected $guarded = ["id"], $guard = 'login_admin';

    protected $casts = [
        'password' => 'hashed',
    ];

    protected $hidden = [
        'password'
    ];
}
