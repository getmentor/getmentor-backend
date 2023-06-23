<?php

use App\Http\Controllers\Api\ExperienceController;
use App\Http\Controllers\Api\MenteeExperienceController;
use App\Http\Controllers\Api\MentorController;
use App\Http\Controllers\Api\PriceController;
use App\Http\Controllers\Api\SpecializationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/test', function (Request $request) {
    return response()->json("test api");
});

Route::get('/mentors', [MentorController::class, 'index'])->name('mentors.index');
Route::get('/mentors/{id}', [MentorController::class, 'show'])->name('mentors.show');
Route::post('/mentors', [MentorController::class, 'store'])->name('mentors.store');

Route::get('/specializations', [SpecializationController::class, 'index'])->name('specializations.index');
Route::get('/specializations/{id}', [SpecializationController::class, 'show'])->name('specializations.index');

Route::get('/experiences', [ExperienceController::class, 'index'])->name('experiences.index');
Route::get('/prices', [PriceController::class, 'index'])->name('prices.index');
Route::get('/menteeExperiences', [MenteeExperienceController::class, 'index'])->name('menteeExperiences.index');
