<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory;

    //Relacion de 1 a 1 con Business (inversa)
    public function business()
    {
        return $this->belongsTo('App\Models\Business');
    }
}
