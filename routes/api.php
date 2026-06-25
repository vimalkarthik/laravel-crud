<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\countryController;

Route::apiResource('employees', EmployeeController::class);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/countries', [countryController::class, 'index'] );
Route::get('/employees', [EmployeeController::class, 'index'] );