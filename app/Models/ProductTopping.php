<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTopping extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }

    public function topping()
    {
        return $this->belongsToMany(Topping::class);
    }
}
