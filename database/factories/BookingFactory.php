<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Booking;
use App\User;
use App\Vehicule;
use Faker\Generator as Faker;

$factory->define(Booking::class, function (Faker $faker) {
    return [
        'user_id' => User::get('id')->random(),
        'vehicule_id' => Vehicule::get('id')->random(),
        'booking_date' => $faker->date,
        'booking_time' => $faker->time,
        'pick_up' => $faker->word,
        'destination' => $faker->word,
        'type' => $faker->word,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
