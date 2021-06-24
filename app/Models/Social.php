<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $fillable = ['facebook_url','youtube_url','instagram_url','business_id','web_url'];
    protected $guarded = [];

    use HasFactory;

    //1 a 1 desde business (inverso)
    public function business()
    {
        return $this->belongsTo('App\Models\Business');
    }
}
