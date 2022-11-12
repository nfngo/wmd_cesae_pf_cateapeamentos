<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cabo extends Model
{
    protected $fillable = [
         'perc_mix_cabo',
         'perc_lme_cobre',
         'perc_lme_chumbo',
         'perc_peso_cobre ',
         'perc_peso_chumbo',
     ];
}
