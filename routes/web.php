<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [ProfileController::class, 'showUsers'])->name('showUsers');

Route::get('/profile/{user}', [UserController::class,'showUserProfile'])->name('showUserProfile');

Route::get('/user/{user}', [UserController::class, 'showUserCourse'])->name('showUserCourse');

Route::get('/course/{course}', [CourseController::class,'showCourseUser'])->name('showCourseUser');