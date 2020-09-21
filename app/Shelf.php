<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shelf extends Model
{
    protected $guarded = [];
    public function niche(){
        return $this->hasMany(Niche::class);
    }
}
