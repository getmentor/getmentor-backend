<?php

namespace App\Http\Resources;

use App\Models\Experience;
use App\Models\Price;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MentorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $prepareSpecializations = $this->specializations->map(function ($specialization) {
            return ['id' => $specialization['id'], 'name' => $specialization['name']];
        });

        return [
            'id' => $this->id,
            'slug' => $this->slug,
            'name' => $this->name,
            'email' => $this->email,
            'telegramUsername' => $this->telegram_username,
            'photoUrl' => $this->photo_url,
            'job' => $this->job,
            'workplace' => $this-> workplace,
            'about' => $this->about,
            'description' => $this->description,
            'competencies' => $this->competencies,
            'price' => Price::getPriceValue($this->price),
            'experience' => Experience::getExperienceAttribute($this->experience),
            'menteeCount' => $this->mentee_count,
            'linkToCalendar' => $this->link_to_calendar,
            'specializations' => $prepareSpecializations,
        ];
    }
}
