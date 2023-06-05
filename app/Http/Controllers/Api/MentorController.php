<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MentorCollection;
use App\Http\Resources\MentorResource;
use App\Models\Mentor;
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
}
