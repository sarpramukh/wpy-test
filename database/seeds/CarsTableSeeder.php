<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert(array(
        array(
            'licence_plate' => 'CBMH 202',
            'brand' => 'Hyundai',
            'color' => 'Silver',
            'house_id' => '1',
            'people_id' => '1'
        ),array(
            'licence_plate' => 'BHMS 002',
            'brand' => 'BMW',
            'color' => 'Red',
            'house_id' => '2',
            'people_id' => '3'
        ),array(
            'licence_plate' => 'HJUG 278',
            'brand' => 'Kia',
            'color' => 'Blue',
            'house_id' => '3',
            'people_id' => '6'
        ),array(
            'licence_plate' => 'LJIT 900',
            'brand' => 'Chevrolet',
            'color' => 'Black',
            'house_id' => '3',
            'people_id' => '5'
        ),array(
            'licence_plate' => 'CBMH 202',
            'brand' => 'Hyundai',
            'color' => 'Silver',
            'house_id' => '4',
            'people_id' => '4'
        )
    	));
    }
}
