<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    //Relacion de 1 a muchos con User
    public function users()
    {
        return $this->hasMany('App\Models\User');
    }

    //Relacion de 1 a 1 con Social
    public function social()
    {
        return $this->hasOne('App\Models\Social');
    }

    //Relacion de 1 a muchos con Valoration
    public function valorations()
    {
        return $this->hasMany('App\Models\Valoration');
    }

    //relacion de 1 a muchos con Offer
    public function offers()
    {
        return $this->hasMany('App\Models\Offer');
    }

    //Relacion de muchos a muchos con City
    public function cities()
    {
        return $this->belongsToMany('App\Models\City');
    }

    //Relacion de muchos a muchos con Category
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    //Relacion polimorfica de 1 a 1
    public function address()
    {
        return $this->morphOne('App\Models\Address','addressable');
    }

    //Relacion polimorfica de 1 a muchos (reversa)
    public function images()
    {
        return $this->morphMany('App\Models\Image', 'imageable');
    }
}
