<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users/create', [UserController::class, 'create'])->name('create');
Route::get('users/store', [UserController::class, 'store'])->name('store');


Route::get('/users', [UserController::class, 'showUsers'])->name('showUsers');
Route::get('user/{id}', [ProfileController::class, 'showUserProfile'])->name('showUserProfile');
Route::post('user/{userId}/enroll/{course}', [UserController::class, 'enrollInCourse'])->name('enrollInCourse');

Route::get('/profiles/{user}', [UserController::class,'showUserProfile'])->name('showUserProfile');

Route::get('/users/{user}', [UserController::class, 'showUserCourse'])->name('showUserCourse');

Route::get('/course/{course}', [CourseController::class,'showCourseUsers'])->name('showCourseUsers');