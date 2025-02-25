<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\WorkoutController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'dashboard')->name('dashboard');

// AUTH Routes
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

// Profile Routes
Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
});

// Workout Routes
Route::group(['middleware' => 'auth'], function () {
    Route::get('/workout', [WorkoutController::class, 'index'])
        ->name('workout');
    Route::get('/workout/create', [WorkoutController::class, 'create'])
        ->name('workout.create');
    Route::post('/workout', [WorkoutController::class, 'store'])
        ->name('workout.store');
    Route::delete('/workout/{workout}', [WorkoutController::class, 'destroy'])
        ->name('workout.destroy');
    Route::get('/workout/{workout}', [WorkoutController::class, 'show'])
        ->name('workout.show');
});

// Login Routes
Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);

// Logout Route
Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');
