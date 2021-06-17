<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name','phone','email','password','type','status','rol_id','business_id'];
    protected $guarded = [];
    use HasFactory;

    //Relacion de uno a muchos inverso
    public function rol(){
        return $this->belongsTo('App\Models\Rol');
    }
   //Relacion de uno a muchos
   public function businesses(){
       return $this->hasMany('App\Models\Business');
   }
     //Relacion polimorfica de muchos a muchos
   public function images(){
    return $this->morphMany('App\Models\Image','imageable');
   }
}
