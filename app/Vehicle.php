<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function proposals()
    {
        return $this->belongsToMany('App\Proposal');
    }
}
