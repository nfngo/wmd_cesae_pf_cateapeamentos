<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lme extends Model
{
    protected $fillable = [
        'data',
         'usd_ton_cobre',
         'usd_ton_chumbo',
         'rate_usd_euro',
         'preco_venda_plastico ',
         'preco_metal_kg_cabo_plastico',
         'lme_cobre_kg_plastico',
         'lme_chumbo_kg_plastico',
         'preco_venda_chumbo',
         'preco_metal_kg_cabo_chumbo',
         'lme_cobre_kg_chumbo',
         'lme_chumbo_kg_chumbo',
         'custo_mix',
         'custo_venda'
     ];
}
