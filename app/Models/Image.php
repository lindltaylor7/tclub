<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    //Relacion polimorfica de 1 a muchos
    public function imageable()
    {
        return $this->morphTo();
    }
}
