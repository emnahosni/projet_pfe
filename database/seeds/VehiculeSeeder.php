<?php

use Illuminate\Database\Seeder;
use App\Vehicule;
class VehiculeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Vehicule::class, 5)->create();
    }
}
