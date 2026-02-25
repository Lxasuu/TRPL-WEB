<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = [
        'title', 'slug', 'content', 'category', 'tags', 'author_id', 'image_path', 'status', 'published_at'
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'tags' => 'array'
    ];

    public function author()
    {
        return $this->belongsTo(Dosen::class, 'author_id');
    }
}
