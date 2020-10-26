<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'document', 'phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'document'
    ];

    public function garages()
    {
        return $this->belongsToMany(Garage::class);
    }

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
