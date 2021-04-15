<?php

use Illuminate\Database\Seeder;
use App\Booking;
class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Booking::class, 5)->create();
    }
}
