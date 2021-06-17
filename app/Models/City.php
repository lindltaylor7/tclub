<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $guarded = [];

    use HasFactory;

    //1 a muchos de ida
    public function addresses()
    {
        return $this->hasMany('App\Models\Address');
    }

    //muchos a muchos
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }
    
    //polimorfica
    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }    
}
