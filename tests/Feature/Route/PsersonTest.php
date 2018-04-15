<?php

namespace Tests\Feature\Route;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PsersonTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testPersonList()
    {
        $response = $this->json('GET','api/person');
        $response->assertStatus(200);
    }

    public function testPersonStore()
    {
        $response = $this->json('POST','api/person',
            ['name' => 'Johnny', 'weight' => '60', 'height' => '1.72']);
        $response->assertStatus(200);
    }

    public function testPersonView()
    {
        $response = $this->json('GET','api/person/1');
        $response->assertStatus(200);
    }

    public function testPersonUpdate()
    {
        $response = $this->json('PUT','api/person/1', ['name' => 'Johnson']);
        $response->assertStatus(200);
    }

    public function testPersonDelete()
    {
        $response = $this->json('DELETE','api/person/1');
        $response->assertStatus(200);
    }

}
