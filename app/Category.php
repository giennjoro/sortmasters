<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $guarded = [];

    public function getRouteKeyname(){
        return 'slug';
    }

    public function properties(){
        return $this->hasMany('App\Property');
    }
}
