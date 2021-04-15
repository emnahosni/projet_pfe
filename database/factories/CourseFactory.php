<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use App\Booking;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'book_id' => Booking::get('id')->random(),
        'tarif' => $faker->word,
        'evaluation' => $faker->word,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
