<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'type',
        'price',
        'description',
        'img',
        'user_id'
    ];

    /**
     * Get the user that owns the products.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The product that belong to the tag.
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
