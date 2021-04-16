<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function vehicule()
    {
        return $this->belongsTo('App\Vehicule');
    }
    public function course()
    {
        return $this->hasOne('App\Course');
    }

    public function scopeComingBookings($query)
    {
        return $query->where('booking_date', '>=', now());
    }

    public function scopePassedBookings($query)
    {
        return $query->where('booking_date', '<', now());
    }
}
