<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $casts = ['id' => 'string'];
    public $incrementing = false;

    public function balds(){
        return $this->belongsTo(Bald::class, 'estado_nemesis_bald_id');
    }

    public function apeas(){
        return $this->belongsTo(Apea::class, 'estado_nemesis_apea_id');
    }

}
