<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garage extends Model
{
    public function clients()
    {
        return $this->belongsToMany('App\Client');
    }

    public function proposals()
    {
        return $this->hasMany('App\Proposal');
    }
}
