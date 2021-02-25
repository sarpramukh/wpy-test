<?php

use Illuminate\Database\Seeder;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('houses')->insert(array(
        	array(
            'house_num' => '101',
            'pincode' => 'M1E 4W7',
            'street_id' => '1',
            'city_id' => '1'
        ),array(
            'house_num' => '202',
            'pincode' => 'M1B 2T2',
            'street_id' => '2',
            'city_id' => '1'
        ),array(
            'house_num' => '88',
            'pincode' => 'L8U 9V0',
            'street_id' => '3',
            'city_id' => '2'
        ),array(
            'house_num' => '72',
            'pincode' => 'L0G 3H4',
            'street_id' => '4',
            'city_id' => '2'
        )
    	));
    }
}
