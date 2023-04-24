<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMentorRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'slug' => 'string|required|unique:mentors,slug|max:255',
            'name' => 'string|required|max:255',
            'email' => 'string|email|required|max:255',
            'telegram_username' => 'string|required|max:255',
            'photo_url' => 'string|url|required|max:255',
            'job_title' => 'string|required|max:255',
            'workplace' => 'string|required|max:255',
            'about' => 'string|required',
            'description' => 'string|required',
            'competencies' => 'string|required|max:255',
            'price' => 'string|required|max:255',
            'experience' => 'string|required|max:255',
            'link_to_calendar' => 'string|url|required|max:255',
            'privacy_policy_agreement' => 'boolean|required',
        ];
    }
}
