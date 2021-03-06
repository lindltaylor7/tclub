<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['street','number','district','city_id','business_id'];
    protected $guarded = [];

    use HasFactory;


    //1 a muchos inverso
    public function business()
    {
        return $this->belongsTo('App\Models\Business');
    }



    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }
}
