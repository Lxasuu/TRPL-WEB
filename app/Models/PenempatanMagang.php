<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenempatanMagang extends Model
{
    protected $fillable = [
        'company_name', 'location', 'academic_year', 'student_list'
    ];

    protected $casts = [
        'student_list' => 'array'
    ];
}
