<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PeoplesInCityTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->json('GET', '/api/peoples/toronto');

        $response
            ->assertStatus(200)
            ->assertJson([
				   [
				      "id" => 1,
				      "full_name" => "Richard",
				      "age" => "29",
				      "house_id" => 1,
				      "created_at" => null,
				      "updated_at" => null
				   ],
				   [
				      "id" => 2,
				      "full_name" => "John",
				      "age" => "21",
				      "house_id" => 1,
				      "created_at" => null,
				      "updated_at" => null
				   ],
				   [
				      "id" => 3,
				      "full_name" => "Ben",
				      "age" => "33",
				      "house_id" => 2,
				      "created_at" => null,
				      "updated_at" => null
				   ]
				]);
    }
}
