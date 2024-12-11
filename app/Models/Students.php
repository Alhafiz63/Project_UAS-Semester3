<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_number',
        'name',
        'gender',
        'birth_date',
        'birth_place',
        'address',
        'phone',
        'email',
        'previous_school',
        'parent_name',
        'parent_contact',
    ];

    public function registration()
    {
        return $this->hasOne(Registrations::class);
    }

    public function documents()
    {
        return $this->hasMany(Documents::class);
    }

    public function payments()
    {
        return $this->hasMany(Payments::class);
    }
}

