<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DoctorController;
use App\Http\Controllers\Api\PatientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function ($router) {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::apiResource('/api-doctors', DoctorController::class);
    Route::apiResource('/api-patients', PatientController::class);
});
