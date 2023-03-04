<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_details extends Model
{
    protected $fillable = [
        'order_id',
        'product_id',
        'quantily',
        'price',
    ];
    use HasFactory;
}
