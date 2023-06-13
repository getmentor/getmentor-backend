<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MenteeExperience;
use Illuminate\Http\JsonResponse;

class MenteeExperienceController extends Controller
{
    public function index(): JsonResponse
    {
        $menteeExperiences = MenteeExperience::getAll();
        $keys = array_keys($menteeExperiences);
        $response = array_map(function ($menteeExperience, $key) {
            return ['id' => $key, 'name' => $menteeExperience];
        }, $menteeExperiences, $keys);
        return response()->json(["data" => ['menteeExperiences' => $response]]);
    }
}
