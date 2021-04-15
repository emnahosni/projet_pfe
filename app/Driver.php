<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    
    public function vehicule()
    {
        return $this->hasOne('App\Vehicule');
    }
}
