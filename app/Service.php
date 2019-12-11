<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function professionals(){
        return $this->belongsTo('App\Professional');
    }
}
