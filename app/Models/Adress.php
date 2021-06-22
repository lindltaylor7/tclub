<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    protected $fillable = ['street','number','district','city_id','business_id'];
    protected $guarded = [];
    use HasFactory;


    //Relacion polimorfica de uno a uno
    public function adressable(){
        return $this->morphTo();

    }    
}
