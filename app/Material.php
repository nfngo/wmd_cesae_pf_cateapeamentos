<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public function controloApeas(){
        return $this->belongsTo(ControloApea::class, 'material_id');
    }
}
