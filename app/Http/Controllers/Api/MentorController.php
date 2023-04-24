<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMentorRequest;
use App\Http\Requests\UpdateMentorRequest;
use App\Models\Mentor;
use Illuminate\Http\JsonResponse;

class MentorController extends Controller
{
    public function index(): JsonResponse
    {
        $mentors = Mentor::paginate(10);
        return response()->json($mentors);
    }
    public function store(StoreMentorRequest $request): JsonResponse
    {
        $mentor = new Mentor();
        $validated = $request->validated();
        $data = [...$validated, 'mentee_count' => 0];
        $mentor->fill($data);
        $mentor->save();

        if (array_key_exists('specializations', $validated)) {
            $mentor->specializations()->attach($validated['specializations']);
        }

        return response()->json($mentor, 201);
    }
    public function show($id): JsonResponse
    {
        $mentor = Mentor::findOrFail($id);
        return response()->json($mentor);
    }
    public function update(UpdateMentorRequest $request, $id): JsonResponse
    {
        $mentor = Mentor::findOrFail($id);
        $validated = $request->validated();
        $mentor->fill($validated);
        $mentor->save();

        if (array_key_exists('specializations', $validated)) {
            $mentor->specializations()->sync($validated['specializations']);
        }

        return response()->json($mentor);
    }
    public function destroy($id): JsonResponse
    {
        $mentor = Mentor::findOrFail($id);
        $mentor->deleteOrFail();
        return response()->json([], 204);
    }
}
