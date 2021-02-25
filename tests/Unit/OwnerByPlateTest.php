<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OwnerByPlateTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->json('GET', '/api/carOwner/HJUG 278');

        $response
            ->assertStatus(200)
            ->assertJson([
            	[
            		"id" => 6,
            		"full_name" => "Rowen",
            		"age" => "44",
            		"house_id" => 3,
            		"created_at" => null,
            		"updated_at" => null
            	]
            ]);
    }
}
