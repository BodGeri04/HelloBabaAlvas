<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $fillable = ['title', 'slug', 'content'];

    // Automatikusan slug generálás
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($blog) {
            $blog->slug = Str::slug($blog->title);
        });
    }
    protected $casts = [
        'social_share_link' => 'array', // Laravel automatikusan arrayként kezel
        'tags' => 'array',
    ];
}
