<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\JsonResponse;

class ExperienceController extends Controller
{
    public function index(): JsonResponse
    {
        $experiences = Experience::getAll();
        $keys = array_keys($experiences);
        $response = array_map(function ($experience, $key) {
            return ['id' => $key, 'name' => $experience];
        }, $experiences, $keys);
        return response()->json(["data" => ['experiences' => $response]]);
    }
}
