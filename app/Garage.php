<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garage extends Model
{
    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }

    public function proposals()
    {
        return $this->hasMany(Proposal::class);
    }
}
