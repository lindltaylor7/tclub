<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [];

    use HasFactory;

    //1 a muchos de ida
    public function users()
    {
        return $this->hasMany('App\Models\User');
    }

}
