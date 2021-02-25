<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert(array(
        array(
            'city_name' => 'Toronto'
        ),array(
            'city_name' => 'Kitchener'
        )
    	));
    }
}
