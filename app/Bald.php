<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bald extends Model
{
    protected $casts = ['id' => 'string'];
    public $incrementing = false;

    public function ref_externa(){
        return $this->belongsTo(RefExterna::class);

    }

    public function estados(){
        return $this->hasMany(Estado::class);
    }

    protected $fillable = [
        'estado_nemesis_bald_id',
        'data_estado_global_bald',
        'data_envio_proj_sp_bald',
        'data_real_p_bald',
        'data_plan_p_bald',
        'data_real_c_bald',
        'data_plan_c_bald',
        'data_real_cadastro_bald',
        'data_plan_cadastro_bald'

    ];


}
