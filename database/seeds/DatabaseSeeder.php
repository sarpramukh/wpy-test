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
        $this->call(CarsTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(HousesTableSeeder::class);
        $this->call(PeoplesTableSeeder::class);
        $this->call(StreetsTableSeeder::class);
    }
}
