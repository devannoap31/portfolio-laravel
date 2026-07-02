<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'tech_stack',
        'link',
        'image',
    ];

    public function getImageUrlAttribute()
    {
        if (Str::startsWith($this->image, 'projects/')) {
            return asset('storage/' . $this->image);
        }
        return asset('images/' . $this->image);
    }
}
