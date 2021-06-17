<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $guarded = [];

    use HasFactory;

    //1 a muchos inverso
    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }

    //1 a muchos de ida
    public function businesses()
    {
        return $this->hasMany('App\Models\Business');
    }

    //polimorfica
    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}
