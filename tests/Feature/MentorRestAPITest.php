<?php

namespace Tests\Feature;

use App\Models\Mentor;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MentorRestAPITest extends TestCase
{
    use RefreshDatabase;

    private array $data;
    protected function setUp(): void
    {
        parent::setUp();
        $this->data = [
            'slug' => 'https://getmentor.dev/slug',
            'name' => 'Firstname Lastname',
            'email' => 'my@mail.ru',
            'telegram_username' => '@my-username',
            'photo_url' => 'https://getmentor.dev/my-photo',
            'job_title' => 'My job',
            'workplace' => 'My workplace',
            'about' => 'My about',
            'description' => 'My description',
            'competencies' => 'My competencies',
            'price' => '1000',
            'experience' => '2-5',
            'link_to_calendar' => 'https://getmentor.dev/my-link-calendar',
            'privacy_policy_agreement' => true,
        ];
    }

    public function testMentorStore(): void
    {
        $route = route('mentors.store');

        $response = $this->json('POST', $route, $this->data);

        $response->assertStatus(201);
    }
    public function testMentorUpdate(): void
    {
        $mentor = Mentor::factory()->create();

        $route = route('mentors.update', $mentor->id);

        $response = $this->json('PUT', $route, $this->data);

        $response->assertStatus(200);
    }

    public function testMentorDestroy(): void
    {
        $mentor = Mentor::factory()->create();

        $route = route('mentors.destroy', $mentor->id);

        $response = $this->json('DELETE', $route);

        $response->assertStatus(204);
    }
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
