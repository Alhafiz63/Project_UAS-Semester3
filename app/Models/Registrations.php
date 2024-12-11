<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrations extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'program_choice',
        'registration_date',
        'status',
    ];

    public function student()
    {
        return $this->belongsTo(Students::class);
    }
}

