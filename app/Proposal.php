<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    public function garage()
    {
        return $this->belongsTo(Garage::class);
    }

    public function vehicles()
    {
        return $this->belongsToMany(Vehicle::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
}
