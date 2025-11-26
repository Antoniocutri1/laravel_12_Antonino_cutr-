<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name'
    ];

    /**
     * The tag that belong to the product.
     */
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
