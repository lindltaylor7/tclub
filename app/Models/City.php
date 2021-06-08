<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    //Relacion de 1 a muchos para Address
    public function addresses()
    {
        return $this->hasMany('App\Models\Address');
    }

    //Relación de muchos a muchos con Business
    public function businesses()
    {
        return $this->belongsToMany('App\Models\Business');
    }

    //Relacion polimorfica de 1 a muchos (reversa)
    public function images()
    {
        return $this->morphMany('App\Models\Image', 'imageable');
    }
}
