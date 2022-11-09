<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RefExterna extends Model
{
    public function acls(){
        return $this->belongsTo(Acl::class);
    }

    public function balds(){
        return $this->hasMany(Bald::class);
    }

    public function apeas(){
        return $this->hasMany(Apea::class);
    }


}
