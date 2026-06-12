<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/signup', function () {
    return view('auth.signup');
});

Route::get('/auth/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

/*
|--------------------------------------------------------------------------
| Protected Routes (Login Required)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'nocache'])->group(function () {

    Route::get('/employees/create', function () {
        return view('employees.create');
    });

    Route::post('/store', [EmployeeController::class, 'store']);

    Route::get('/employees/read', [EmployeeController::class, 'read']);

    Route::get('/employees/{id}/edit', [EmployeeController::class, 'edit']);

    Route::put('/employees/{id}', [EmployeeController::class, 'update']);

    Route::delete('/employees/{id}', [EmployeeController::class, 'destroy']);

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');
});

/*
|--------------------------------------------------------------------------
| Other Routes
|--------------------------------------------------------------------------
*/

Route::get('/includes/index', function () {
    return view('includes.index');
});

Route::get('/check-auth', function () {
    return Auth::check() ? 'Logged In' : 'Not Logged In';
});