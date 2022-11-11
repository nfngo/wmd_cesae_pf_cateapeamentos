<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarifa extends Model
{
    protected $fillable = [
        'custo_retirada',
         'custo_operacao',
     ];
}
