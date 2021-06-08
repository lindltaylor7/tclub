<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $guarded = [];
    use HasFactory;


    // Relacion de uno a uno inversa
    public function business(){
    return $this->belongsTo('App\Models\Business');
    }
}
