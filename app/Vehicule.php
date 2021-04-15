<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    public function bookings()
    {
        return $this->hasMany('App\Booking');
    }
    public function driver()
    {
        return $this->belongsTo('App\Driver');
    }
}
