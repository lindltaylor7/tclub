<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    use HasFactory;

    //muchos a muchos
    public function businesses()
    {
        return $this->belongsToMany('App\Models\Business');
    }

    public function cities()
    {
        return $this->belongsToMany('App\Models\City');
    }


   //Relacion polimorfica de muchos a muchos
   public function images(){
   return $this->morphMany('App\Models\Image','imageable');
   }



}
