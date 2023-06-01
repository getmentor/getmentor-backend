<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMentorRequest;
use App\Http\Requests\UpdateMentorRequest;
use App\Http\Resources\MentorCollection;
use App\Http\Resources\MentorResource;
use App\Http\Resources\SpecializationResource;
use App\Models\Mentor;
use App\Models\Specialization;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;

class SpecializationController extends Controller
{
    public function index()
    {
        $specializations = Specialization::all(['id', 'name']);
        return new SpecializationResource($specializations);
    }
}
