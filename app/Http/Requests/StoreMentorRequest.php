<?php

namespace App\Http\Requests;

use App\Models\Experience;
use App\Models\Price;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreMentorRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'name' => 'string|required|max:255',
            'email' => 'string|email|required|max:255',
            'telegramUsername' => 'string|required|max:255',
            'photoUrl' => 'string|url|required|max:255',
            'job' => 'string|required|max:255',
            'workplace' => 'string|required|max:255',
            'about' => 'string|required',
            'description' => 'string|required',
            'competencies' => 'string|required|max:255',
            'linkToCalendar' => 'string|url|required|max:255',
            'specializations' => 'array|exists:specializations,name',
            'price' => [
                'string',
                'required',
                'max:255',
                Rule::in(Price::getAll()),
            ],
            'experience' => [
                'string',
                'required',
                'max:255',
                Rule::in(Experience::getAll()),
            ],
        ];
    }
}
