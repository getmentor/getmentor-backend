<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Price;
use Illuminate\Http\JsonResponse;

class PriceController extends Controller
{
    public function index(): JsonResponse
    {
        $prices = Price::getAll();
        $keys = array_keys($prices);
        $response = array_map(function ($price, $key) {
            return ['id' => $key, 'name' => $price];
        }, $prices, $keys);
        return response()->json(["data" => ['prices' => $response]]);
    }
}
