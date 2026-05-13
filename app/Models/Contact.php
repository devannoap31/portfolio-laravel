<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // Mengizinkan 3 kolom ini saja yang boleh diisi dari form
    protected $fillable = [
        'name',
        'email',
        'message'
    ];
}
