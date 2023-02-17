<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class APITest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testTheApiReturnsASuccessfulResponse(): void
    {
        $response = $this->get('/api/test');

        $response->assertStatus(200);
    }
}
