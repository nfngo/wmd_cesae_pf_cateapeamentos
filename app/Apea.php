<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apea extends Model

{
    protected $casts = ['id' => 'string'];
    public $incrementing = false;

    public function ref_externa(){
        return $this->belongsTo(RefExterna::class);
    }
    public function custo(){
        return $this->belongsTo(Custos::class);
    }

    public function controlo_apea(){
        return $this->belongsTo(ControloApea::class);
    }

    public function estados(){
        return $this->hasMany(Estado::class);
    }

     protected $fillable = [
         'id',
        'estado_nemesis_apea_id',
         'data_estado_global_apea',
         'data_envio_proj_sp_apea',
         'data_real_p_apea',
         'data_plan_p_apea',
         'data_real_c_apea',
         'data_plan_c_apea',
         'data_real_cadastro_apea',
         'data_plan_cadastro_apea',
         'tipo_cabos',
         'peso_cabos',
         'faturado'

     ];





}
