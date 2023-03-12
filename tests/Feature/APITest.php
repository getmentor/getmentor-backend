<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class APITest extends TestCase
{
    use RefreshDatabase;

    public function testTheApiReturnsASuccessfulResponse(): void
    {
        $response = $this->get('/api/test');

        $response->assertStatus(200);
    }

    public function testCreateMentor(): void
    {
        $this->assertDatabaseCount('posts', 0);

        $route = route('mentors.store');
        $body = [
            "id" => 1,
            "slug" => "Slug",
            "name" => "Firstname, LastName",
            "job" => "My first job",
            "workplace" => "My workplace",
            "about" => "My About",
            "description" => "My Description",
            "competencies" => "My Competencies",
            "experience" => "My Experience",
            "price" => 123.45,
            "menteeCount" => 6,
            "photo_url" => "https://yandex.ru/my-foto",
        ];

        $response = $this->json('POST', $route, $body);

        $response->assertStatus(Response::HTTP_CREATED);

        $this->assertDatabaseCount('posts', 1);
    }

    public function testGetMentors(): void
    {
        $publishedCount = 10;

        Mentor::factory()->count($publishedCount)->create();

        $route = route('mentors.index');

        $response = $this->json('GET', $route);

        $response->assertStatus(Response::HTTP_OK);

        $response->assertJsonFragment([
            'total' => $publishedCount,
        ]);
    }

    public function testGetMentor(): void
    {

        $mentor = Mentor::factory()->create();

        $route = route('mentors.show', ['mentor' => $mentor->id]);

        $response = $this->json('GET', $route);

        $response->assertStatus(Response::HTTP_OK);
    }
}
