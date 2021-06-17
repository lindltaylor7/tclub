<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{    
    protected $fillable = ['url'];
    protected $guarded = [];
    use HasFactory;

    //Relacion polimorfica de uno a uno
    public function imageable(){
        return $this->morphTo();

    }    
}
