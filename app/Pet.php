<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    public function owner() 
    {
        return $this->belongsTo(Owner::class);
    } 

    public function visits()
    {
        return $this->hasMany(Visit::class);
    }
}
