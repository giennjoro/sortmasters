<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //
    protected $guarded = [];

    public function getRouteKeyname(){
        return 'slug';
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
