<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
  public $table = 'product_categories';

    public $fillable = [
       'name', 'slug', 'appear','sort', 'created_at','updated_at'
    ];
}
