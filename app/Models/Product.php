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
        static::creating(function ($product) {
            // Ellenőrizzük, hogy létezik-e már az adott slug
            $slug = Str::slug($product->name);

            // Ha létezik, akkor hozzáadunk egy számot az egyediség érdekében
            if (Product::where('slug', $slug)->exists()) {
                $slug .= '-' . (Product::where('slug', 'like', $slug . '%')->count() + 1);
            }

            // Hozzárendeljük a slug-ot a termékhez
            $product->slug = $slug;
        });
    }
}
