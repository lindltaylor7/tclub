<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = ['name','ruc','phone','status'];
    protected $guarded = [];
    use HasFactory;


    //Relacion de uno a muchos
    public function offers(){
        return $this->hasMany('App\Models\Offer');
    }
    // Relacion de uno a muchos
    public function users(){
        return $this->hasMany('App\Models\User');
    }

    //Relacipn de uno a muchos
    public function valorations(){
        return $this->hasMany('App\Models\Valoration');
    }

    //Relacion de uno auno
    public function social(){
    return $this->hasOne('App\Models\Social');
    }

    //Relacio de muchos a muchos
    public function categories(){
    return $this->belongsToMany('App\Models\Category');
    }

    //Relacio de muchos a muchos
    public function cities(){
    return $this->belongsToMany('App\Models\City');
    }

   //Relaion polimorfica de uno a uno
   public function adress()   {
   return $this->morphOne('App\Models\Adress','adressable');
   }

   //Relacion polimorfica de muchos a muchos
   public function images(){
    return $this->morphMany('App\Models\Image','imageable');
   }
}
