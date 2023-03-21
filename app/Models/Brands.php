<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;
    public $table = 'brands';

    public $fillable = [
        'name', 'slug', 'appear','description','keywords','sort', 'created_at','updated_at'
    ];
}
