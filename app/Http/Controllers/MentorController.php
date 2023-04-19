<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMentorRequest;
use App\Http\Requests\UpdateMentorRequest;
use App\Models\Mentor;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use PhpParser\Node\Expr\New_;

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
        $mentor->fill($validated);
        $mentor->save();

        return response()->json($mentor, 201);
    }
    public function show($id): JsonResponse
    {
        $mentor = Mentor::findOrFail($id);
        return response()->json($mentor);
    }
    public function update(UpdateMentorRequest $request, $id): JsonResponse
    {
        $validated = $request->validated();
        $mentor = Mentor::findOrFail($id);
        $mentor->fill($validated);
        $mentor->save();
        return response()->json($mentor);
    }
    public function destroy($id): JsonResponse
    {
        $mentor = Mentor::findOrFail($id);
        $mentor->deleteOrFail();
        return response()->json([], 204);
    }
}
