<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLogin extends Model
{
    use HasFactory;

    protected $table = 'UserLogin';
    protected $fillable = ['name', 'email', 'password'];

    
    protected $hidden = ['password'];
}
