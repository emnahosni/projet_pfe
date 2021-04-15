<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Driver;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Driver::class, function (Faker $faker) {
    return [
        'name_dr' => $faker->name,
        'email_dr' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'phone_dr' => $faker->e164PhoneNumber,
        'address_dr' => $faker->address,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
