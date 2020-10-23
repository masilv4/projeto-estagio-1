<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function garages()
    {
        return $this->belongsToMany('App\Garage');
    }

    public function vehicles()
    {
        return $this->hasMany('App\Vehicle');
    }
}
