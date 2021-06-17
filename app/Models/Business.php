<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = ['name','slogan','description','ruc','phone','status','user_id'];
    
    use HasFactory;


    //Relacion de uno a muchos
    public function offers(){
        return $this->hasMany('App\Models\Offer');
    }
    // Relacion de uno a muchos
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //Relacion de uno a muchos
    public function valorations(){
        return $this->hasMany('App\Models\Valoration');
    }

    //Relacion de uno a uno
    public function social(){
    return $this->hasOne('App\Models\Social');
    }

    //Relacio de muchos a muchos
    public function categories(){
    return $this->belongsToMany('App\Models\Category');
    }

   //Relaion  de uno a muchos
   public function addresses()   {
   return $this->hasMany('App\Models\Address');
   }

   //Relacion polimorfica de muchos a muchos
   public function images(){
    return $this->morphMany('App\Models\Image','imageable');
   }
}
