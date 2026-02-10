<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $fillable = [
        'name', 'title', 'nidn', 'bio', 'image_path', 'social_links', 'is_active'
    ];

    protected $casts = [
        'social_links' => 'array',
        'is_active' => 'boolean'
    ];
}
