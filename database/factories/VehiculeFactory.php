<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vehicule;
use App\Driver;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Vehicule::class, function (Faker $faker) {
    return [
        'driver_id' => Driver::get('id')->random(),
        'marque' => $faker->word,
        'model' => $faker->word,
        'color' => $faker->colorName,
        'matricule' => $faker->ean8,
        'année de vehicule'=> $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null),
    ];
});
