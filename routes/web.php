<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/employees/create', function () {
    return view('employees.create');
});

Route::get('/includes/index', function () {
    return view('includes.index');
});
Route::post('/store', [EmployeeController::class, 'store']);

Route::get('/employees/read', [EmployeeController::class, 'read']);

Route::get('/employees/{id}/edit', [EmployeeController::class, 'edit']);

Route::put('/employees/{id}', [EmployeeController::class, 'update']);

Route::delete('/employees/{id}', [EmployeeController::class, 'destroy']);
