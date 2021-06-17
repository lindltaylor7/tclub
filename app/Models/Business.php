<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{

    protected $fillable = ['name','slogan','description','ruc','phone','status','user_id'];
    
    use HasFactory;

    protected $guarded = [];



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

   //Relaion  de uno a muchos
   public function addresses()   {
   return $this->hasMany('App\Models\Address');
   }

   //Relacion polimorfica de muchos a muchos
   public function images(){
    return $this->morphMany('App\Models\Image','imageable');
   }

    //muchos a muchos
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }
}
