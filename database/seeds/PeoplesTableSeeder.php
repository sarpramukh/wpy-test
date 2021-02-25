<?php

use Illuminate\Database\Seeder;

class PeoplesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('peoples')->insert(array(
       	array(
            'full_name' => 'Richard',
            'age' => '29',
            'house_id' => '1'
        ),array(
            'full_name' => 'John',
            'age' => '21',
            'house_id' => '1'
        ),array(
            'full_name' => 'Ben',
            'age' => '33',
            'house_id' => '2'
        ),array(
            'full_name' => 'Kumar',
            'age' => '25',
            'house_id' => '4'
        ),array(
            'full_name' => 'Lisa',
            'age' => '30',
            'house_id' => '3'
        ),array(
            'full_name' => 'Rowen',
            'age' => '44',
            'house_id' => '3'
        )
    	));
    }
}
