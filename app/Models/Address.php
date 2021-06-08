<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $guarded = [];

    use HasFactory;

    //Relacion de 1 a muchos desde City (inversa)
    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }

    //Relacion polimorfica de 1 a 1
    public function addressable()
    {
        return $this->morphTo();
    }
}
