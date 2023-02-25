<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'category_id',
        'image',
        'title',
        'summary',
        'content',
        'view',
        'hot',
        'appear',
    ];
    protected $tableName = "news";

}
