<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ControloApea extends Model
{
    public function apeas(){
        return $this->hasMany(Apea::class);
    }

    public function materials(){
        return $this->hasMany(Material::class);
    }
}
