<?php

use Illuminate\Database\Seeder;

class StreetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('streets')->insert(array(
         	array(
         		'street_name' => 'Livonia Place',
            	'city_id' => '1'
         	),array(
	            'street_name' => 'Morningside road',
	            'city_id' => '1'
        	),array(
	            'street_name' => 'Finch Ave',
	            'city_id' => '2'
        	),array(
	            'street_name' => 'Guelp st',
	            'city_id' => '2'
        	)
            
        
    	));
    }
}
