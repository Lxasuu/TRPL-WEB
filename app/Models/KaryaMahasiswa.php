<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KaryaMahasiswa extends Model
{
    protected $fillable = [
        'title', 'slug', 'student_name', 'image_path', 'description', 'link', 'category'
    ];
}
