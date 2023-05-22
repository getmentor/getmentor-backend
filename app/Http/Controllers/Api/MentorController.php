<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMentorRequest;
use App\Http\Requests\UpdateMentorRequest;
use App\Models\Mentor;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;

class MentorController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $mentors = Mentor::paginate(10);

        return response()->json($mentors);
    }
    public function show($id): JsonResponse
    {
        $mentor = Mentor::findOrFail($id);
        /**
         * @status 200
         * @body Mentor
         */
        return response()->json($mentor);
    }
}
