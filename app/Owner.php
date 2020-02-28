<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use AnimalSeeder; 


class Owner extends Model
{
    public function pets() 
    {
        return $this->hasMany(Pet::class);
    } 


    public function visits()
    {
        return $this->hasMany(Visit::class);
    }

}
