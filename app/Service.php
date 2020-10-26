<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function proposals()
    {
        return $this->belongsToMany(Proposal::class);
    }
}
