<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMentorRequest;
use App\Http\Resources\MentorCollection;
use App\Http\Resources\MentorResource;
use App\Models\Experience;
use App\Models\Mentor;
use App\Models\Price;
use App\Models\Specialization;
use App\Services\Dictionary;
use Illuminate\Http\Resources\Json\JsonResource;

class MentorController extends Controller
{
    public function index(): JsonResource
    {
        $mentors = Mentor::paginate(10);
        return new MentorCollection($mentors);
    }
    public function show($id): JsonResource
    {
        $mentor = Mentor::findOrFail($id);
        return new MentorResource($mentor);
    }

    public function store(StoreMentorRequest $request)
    {
        $prepareSlug = Dictionary::prepareText($request->name);
        $transliterationSlug = Dictionary::transliterationToEN($prepareSlug);
        $randomNumber = random_int(100, 999);
        $slug = "{$transliterationSlug}-{$randomNumber}";

        $data = [
            'slug' => $slug,
            'name' => $request->name,
            'email' => $request->email,
            'telegram_username' => $request->telegramUsername,
            'photo_url' => $request->photoUrl,
            'job' => $request->job,
            'workplace' => $request->workplace,
            'about' => $request->about,
            'description' => $request->description,
            'competencies' => $request->competencies,
            'price' => Price::getPriceID($request->price),
            'experience' => Experience::getExperienceID($request->experience),
            'mentee_count' => 0,
            'link_to_calendar' => $request->linkToCalendar,
        ];

        $mentor = new Mentor();
        $mentor->fill($data);
        $mentor->save();

        $specializations = [];
        if (array_key_exists('specializations', $request->toArray())) {
            $specializations = $request->toArray()['specializations'];
            $specializationsIds = array_map(function ($specialization) {
                return Specialization::whereName($specialization)
                    ->firstOrFail()
                    ->id;
            }, $specializations);

            $mentor->specializations()->attach($specializationsIds);
        }

        return new MentorResource($mentor);
    }
}
