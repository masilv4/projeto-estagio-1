<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'model', 'make', 'year', 'client_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'client_id'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function proposals()
    {
        return $this->belongsToMany(Proposal::class);
    }
}
