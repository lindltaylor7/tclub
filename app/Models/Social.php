<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $guarded = [];

    use HasFactory;

    //1 a 1 desde business (inverso)
    public function business()
    {
        return $this->belongsTo('App\Models\Business');
    }
}
