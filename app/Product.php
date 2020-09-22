<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';
    protected $fillable = [
        'name',
        'user_id',
        'description',
        'short_description',
        'category',
        'sku',
        'price',
        'status'
    ];

    public static function find(string $string)
    {
    }
}
