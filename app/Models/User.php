<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    //Relacion de 1 a muchos con Rol (inversa)
    public function rol()
    {
        return $this->belongsTo('App\Models\Rol');
    }

    //Relacion de 1 a muchos con Empresa (inversa)
    public function business()
    {
        return $this->belongsTo('App\Models\Business');
    }

    //Relacion polimorfica de 1 a 1
    public function address()
    {
        return $this->morphOne('App\Models\Address','addressable');
    }
}
