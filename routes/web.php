<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profiles', [ProfileController::class, 'showAllProfiles']);
Route::get('/users/{id}/profile', [UserController::class, 'showUserProfile']);
Route::get('/users/{id}/courses', [UserController::class, 'showUserCourses']);
Route::get('/courses/{id}/users', [CourseController::class, 'showCourseUsers']);