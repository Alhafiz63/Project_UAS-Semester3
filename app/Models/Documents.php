<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'document_type',
        'file_path',
        'uploaded_at',
    ];

    public function student()
    {
        return $this->belongsTo(Students::class);
    }
}

