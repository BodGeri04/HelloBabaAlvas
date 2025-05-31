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
        // Létrehozáskor
        static::creating(function ($blog) {
            $slug = Str::slug($blog->title);
            if (Blog::where('slug', $slug)->exists()) {
                $slug .= '-' . (Blog::where('slug', 'like', $slug . '%')->count() + 1);
            }
            $blog->slug = $slug;
        });

        // Frissítéskor
        static::updating(function ($blog) {
            if ($blog->isDirty('title')) {
                $slug = Str::slug($blog->title);
                if (Blog::where('slug', $slug)->where('id', '!=', $blog->id)->exists()) {
                    $slug .= '-' . (Blog::where('slug', 'like', $slug . '%')->where('id', '!=', $blog->id)->count() + 1);
                }
                $blog->slug = $slug;
            }
        });
    }
    protected $casts = [
        'social_share_link' => 'array', // Laravel automatikusan arrayként kezel
        'tags' => 'array',
    ];
}
