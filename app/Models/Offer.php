<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    //Relacion de 1 a muchos desde Business (inversa)
    public function business()
    {
        return $this->belongsTo('App\Models\Business');
    }

    //Relacion polimorfica de 1 a muchos (reversa)
    public function images()
    {
        return $this->morphMany('App\Models\Image', 'imageable');
    }
}
