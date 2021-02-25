<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarsInStreetTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->json('GET', '/api/cars/Morningside road');

        $response
            ->assertStatus(200)
            ->assertJson([
            [
            	"id" => 2,
            	"licence_plate" => "BHMS 002",
            	"brand" => "BMW",
            	"color" => "Red",
            	"house_id" => 2,
            	"people_id" => 3,
            	"created_at" => null,
            	"updated_at" => null
            ]
        ]);
    }
}
