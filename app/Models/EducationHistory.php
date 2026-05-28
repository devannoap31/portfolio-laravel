<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationHistory extends Model
{
    use HasFactory;

    // Menentukan nama tabel secara eksplisit karena menggunakan format snake_case jamak
    protected $table = 'education_histories';

    // Kolom yang diizinkan untuk diisi secara massal
    protected $fillable = [
        'school_name',
        'degree',
        'start_year',
        'end_year'
    ];
}
