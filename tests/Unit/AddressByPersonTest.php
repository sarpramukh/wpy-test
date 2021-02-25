<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AddressByPersonTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->json('GET', '/api/address/Ben');

        $response
            ->assertStatus(200)
            ->assertJson([
            	[
            		"house_num" => "202",
            		"street_name" => "Morningside road",
            		"city_name" => "Toronto",
            		"pincode" => "M1B 2T2"
            	]
            ]);
    }
}
