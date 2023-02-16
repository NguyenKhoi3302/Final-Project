<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = [
        'id',
        'brand',
        'product_category',
        'name',
        'slug',
        'images',
        'view',
        'bought',
        'description',
        'content',
        'price',
        'discount',
        'sku',
        'sex',
        'appear',
        

    ];

    use HasFactory;
}
