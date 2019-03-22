<?php

namespace App;
use App\Property;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    //
    public function property(){
        return $this->hasMany('App\Property');
    }
}
