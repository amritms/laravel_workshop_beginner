<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'count',
        'price',
        'description'
    ];

    public function owner()
    {
        return $this->belongsTo(\App\User::class, 'user_id');
    }
}
