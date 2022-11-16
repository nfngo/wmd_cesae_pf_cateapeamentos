<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Custos extends Model
{
    public function apeas()
    {
        return $this->hasMany(Apea::class);
    }

}
