<?php

use App\Http\Controllers\Api\MentorController;
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

Route::get('/mentors', [MentorController::class, 'index'])->name('mentors.index');
Route::get('/mentors/{id}', [MentorController::class, 'show'])->name('mentors.show');
