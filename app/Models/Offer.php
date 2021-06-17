<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $guarded = [];

    use HasFactory;

    //1 a muchos inverso
    public function business()
    {
        return $this->belongsTo('App\Models\Business');
    }

    //polimorfica
    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}
