<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $all)
 */
class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'user_id',
        'name',
        'description',
        'short_description',
        'category',
        'sku',
        'price',
        'status'
    ];
}
