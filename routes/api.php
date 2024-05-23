<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
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


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/course', [CourseController::class, 'index']);
Route::get('/course/{id}', [CourseController::class, 'show']);
Route::post('/course', [CourseController::class, 'store']);
Route::put('/course/{id}', [CourseController::class, 'update']);
Route::delete('/course/{id}', [CourseController::class, 'destroy']);

Route::get('/student', [CourseController::class, 'index']);
Route::get('/student/{id}', [CourseController::class, 'show']);
Route::post('/student', [CourseController::class, 'store']);
Route::put('/student/{id}', [CourseController::class, 'update']);
Route::delete('/student/{id}', [CourseController::class, 'destroy']);
