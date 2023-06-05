<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SpecializationCollection;
use App\Http\Resources\SpecializationResource;
use App\Models\Specialization;
use Illuminate\Http\Resources\Json\JsonResource;

class SpecializationController extends Controller
{
    public function index(): SpecializationCollection
    {
        $specializations = Specialization::all();
        return new SpecializationCollection($specializations);
    }

    public function show($id): SpecializationResource
    {
        $specialization = Specialization::findOrFail($id);
        return new SpecializationResource($specialization);
    }
}
