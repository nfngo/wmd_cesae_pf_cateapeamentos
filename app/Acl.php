<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acl extends Model
{
    public function refExternas() {
        return $this->hasMany(RefExterna::class);

    }
}
