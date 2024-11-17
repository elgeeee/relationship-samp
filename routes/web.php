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

Route::get('/profiles/{user}', [UserController::class,'showUserProfile'])->name('showUserProfile');

Route::get('/users/{user}', [UserController::class, 'showUserCourse'])->name('showUserCourse');

Route::get('/courses/{id}', [CourseController::class,'showCourseUsers'])->name('showCourseUsers');