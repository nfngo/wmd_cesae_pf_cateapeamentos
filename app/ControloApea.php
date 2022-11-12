<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class ControloApea extends Model

{
    use Sortable;

    protected $casts = ['id' => 'string'];
    public $incrementing = false;

    public function apeas(){
        return $this->hasMany(Apea::class);
    }

    public function materials(){
        return $this->hasMany(Material::class);
    }

    public $sortable =
        [
            'apea_id',
            'material_id',
            'data',
        ];
}
