<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable = [
        'title', 'expiry_date', 'date', 'user_id', 'slug', 'description'
    ];

    public function user(){
        $this->belongsTo(App\user);
    }
}