<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MentorCollection;
use App\Http\Resources\MentorResource;
use App\Models\Mentor;
use Illuminate\Http\JsonResponse;

class MentorController extends Controller
{
    public function index(): JsonResponse
    {
        $mentors = Mentor::paginate(10);
        return response()->json($mentors);
    }
    public function show($id): JsonResource
    {
        $mentor = Mentor::findOrFail($id);
        return response()->json($mentor);
    }
}
