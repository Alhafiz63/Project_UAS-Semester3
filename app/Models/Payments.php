<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'amount',
        'payment_date',
        'status',
        'receipt_path',
    ];

    public function student()
    {
        return $this->belongsTo(Students::class);
    }
}

