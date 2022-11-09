<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bald extends Model
{
    public function ref_externas(){
        return $this->belongsTo(RefExterna::class);

    }

    public function estados(){
        return $this->hasMany(Estado::class);
    }
}
