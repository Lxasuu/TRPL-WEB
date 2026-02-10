<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    protected $fillable = [
        'name', 'provider', 'type', 'description', 'deadline', 'requirements'
    ];
}
