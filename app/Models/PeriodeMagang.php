<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeriodeMagang extends Model
{
    protected $fillable = [
        'student_name', 'nim', 'internship_place', 'location', 'start_date', 'end_date', 'dosen_id'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'dosen_id');
    }

    public function getFormattedPeriodAttribute()
    {
        if (!$this->start_date || !$this->end_date) {
            return '-';
        }

        $start = $this->start_date->translatedFormat('F Y');
        $end = $this->end_date->translatedFormat('F Y');

        if ($start === $end) {
            return $start;
        }

        return "$start - $end";
    }
}
