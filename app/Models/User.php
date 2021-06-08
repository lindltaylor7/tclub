<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name','phone','email','password','type','status','rol_id','business_id'];
    protected $guarded = [];
    use HasFactory;

    //Relacion de muchos inverso
    public function rol(){
        return $this->belongsTo('App\Models\Rol');
    }
   //Relacion de muchos inverso
   public function business(){
       return $this->belongsTo('App\Models\Business');
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
