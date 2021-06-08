<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    //Relacion de 1 a muchos con User
    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
