<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    public function services(){
        return $this->hasMany('App\Service');
    }
}
