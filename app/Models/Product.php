<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'description',
        'price',
    ];

    // Automatikusan slug generálás
    protected static function boot()
    {
        parent::boot();
        // Létrehozáskor
        static::creating(function ($product) {
            $slug = Str::slug($product->name);
            if (Product::where('slug', $slug)->exists()) {
                $slug .= '-' . (Product::where('slug', 'like', $slug . '%')->count() + 1);
            }
            $product->slug = $slug;
        });

        // Frissítéskor
        static::updating(function ($product) {
            // Csak akkor generáljunk új slugot, ha a név változott
            if ($product->isDirty('name')) {
                $slug = Str::slug($product->name);
                if (Product::where('slug', $slug)->where('id', '!=', $product->id)->exists()) {
                    $slug .= '-' . (Product::where('slug', 'like', $slug . '%')->where('id', '!=', $product->id)->count() + 1);
                }
                $product->slug = $slug;
            }
        });
    }
}
