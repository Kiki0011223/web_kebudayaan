<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

<<<<<<< HEAD
        $response->assertOk();
=======
        $response->assertStatus(200);
>>>>>>> 7275130ac15ab9e3fb2f6baab7f239faec0b709e
    }
}
