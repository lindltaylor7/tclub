<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $guarded = [];

    use HasFactory;

    //de 1 a 1 con socials
    public function social()
    {
        return $this->hasOne('App\Models\Social');
    }

    //1 a muchos inverso
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    //1 a muchos de ida
    public function valorations()
    {
        return $this->hasMany('App\Models\Valoration');
    }

    public function offers()
    {
        return $this->hasMany('App\Models\Offer');
    }

    public function addresses()
    {
        return $this->hasMany('App\Models\Address');
    }

    //muchos a muchos
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    //polimorfica
    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}
