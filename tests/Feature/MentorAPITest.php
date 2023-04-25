<?php

namespace Tests\Feature;

use App\Models\Mentor;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MentorAPITest extends TestCase
{
    use RefreshDatabase;

    public function testGetMentors(): void
    {
        Mentor::factory()->create();

        $route = route('mentors.index');

        $response = $this->json('GET', $route);

        $response->assertStatus(200);
    }
    public function testShowMentor(): void
    {
        $mentor = Mentor::factory()->create();

        $route = route('mentors.show', $mentor->id);

        $response = $this->json('GET', $route);

        $response->assertStatus(200);
    }
}
