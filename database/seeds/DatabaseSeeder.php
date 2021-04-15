<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersSeeder::class);
         $this->call(DriverSeeder::class);
        $this->call(VehiculeSeeder::class);
         $this->call(BookingSeeder::class);
         $this->call(CourseSeeder::class);

    }
}
