<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class UserLogin extends Authenticatable
{
    use HasFactory;

    protected $table = 'UserLogin';
    protected $fillable = ['name', 'email', 'password'];

    
    protected $hidden = ['password'];
    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
