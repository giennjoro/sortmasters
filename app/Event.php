<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //

    protected $guarded = [];

    protected $dates = ['expiry_date', 'date'];

    public function user(){
        $this->belongsTo(App\user);
    }
}