<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    public function garage()
    {
        return $this->belongsTo('App\Garage');
    }

    public function vehicles()
    {
        return $this->belongsToMany('App\Vehicle');
    }

    public function services()
    {
        return $this->belongsToMany('App\Service');
    }
}
