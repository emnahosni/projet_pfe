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
}
