<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';  //Must specify table name otherwise it will assume the name as plural 'products'
    protected $fillable = [
        'product_name',
        'product_price',
        'product_rating',
        'product_image',
        'short_description',
        'long_description'
    ];
}
