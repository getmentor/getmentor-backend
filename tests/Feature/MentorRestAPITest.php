<?php

namespace Tests\Feature;

use App\Models\Mentor;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MentorRestAPITest extends TestCase
{
    use RefreshDatabase;

    public function testMentorStore(): void
    {
        $route = route('mentors.store');
        $body = [
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
            'link_to_calendar' => 'https://getmentor.dev/my-link-calendar',
            'privacy_policy_agreement' => true,
        ];

        $response = $this->json('POST', $route, $body);

        $response->assertStatus(201);
    }
    public function testMentorUpdate(): void
    {
        $mentor = Mentor::factory()->create([
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
            'link_to_calendar' => 'https://getmentor.dev/my-link-calendar',
            'privacy_policy_agreement' => true,
        ]);

        $route = route('mentors.update', [
            'id' => $mentor->id,
        ]);

        $body = [
            'slug' => 'https://getmentor.dev/my-new-slug',
            'name' => 'My new Firstname Lastname',
            'email' => 'my-new@mail.ru',
            'telegram_username' => '@my-new-username',
        ];

        $response = $this->json('PUT', $route, $body);

        $response->assertStatus(200);
    }

    public function testMentorDestroy(): void
    {
        $mentor = Mentor::factory()->create([
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
            'link_to_calendar' => 'https://getmentor.dev/my-link-calendar',
            'privacy_policy_agreement' => true,
        ]);

        $route = route('mentors.destroy', [
            'mentor' => $mentor->id,
        ]);

        $response = $this->json('DELETE', $route);

        $response->assertStatus(204);
    }
    public function testGetMentors(): void
    {
        $mentor = Mentor::factory()->create([
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
            'link_to_calendar' => 'https://getmentor.dev/my-link-calendar',
            'privacy_policy_agreement' => true,
        ]);

        $route = route('mentors.index', [
            'id' => $mentor->id,
        ]);

        $response = $this->json('GET', $route);

        $response->assertStatus(200);
    }
    public function testShowMentor(): void
    {
        $mentor = Mentor::factory()->create([
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
            'link_to_calendar' => 'https://getmentor.dev/my-link-calendar',
            'privacy_policy_agreement' => true,
        ]);

        $route = route('mentors.show', [
            'id' => $mentor->id,
        ]);

        $response = $this->json('GET', $route);

        $response->assertStatus(200);
    }
}
