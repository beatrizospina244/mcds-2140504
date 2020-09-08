<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'name',
        'image',
        'description',
        'user-id',
        'category-id',
        'slider',
        'price'
        
    ];
}
