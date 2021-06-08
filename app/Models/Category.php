<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //Relacion de muchos a muchos con Business
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
