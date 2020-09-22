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
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }
}
