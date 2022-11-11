<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $casts = ['id' => 'string'];
    public $incrementing = false;

    public function bald(){
        return $this->belongsTo(Bald::class, 'estado_nemesis_bald_id');
    }

    public function apea(){
        return $this->belongsTo(Apea::class, 'estado_nemesis_apea_id');
    }

}
