<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = [
        'title', 'slug', 'content', 'author_id', 'image_path', 'status', 'published_at'
    ];

    protected $casts = [
        'published_at' => 'datetime'
    ];

    public function author()
    {
        return $this->belongsTo(Dosen::class, 'author_id');
    }
}
