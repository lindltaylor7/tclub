<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valoration extends Model
{
    protected $guarded = [];

    use HasFactory;

    //1 a muchos inverso
    public function business()
    {
        return $this->belongsTo('App\Models\Business');
    }
}
