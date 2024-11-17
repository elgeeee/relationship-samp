<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function showCourseUsers(Course $course, Request $request)
    {
        $users = $course->users;
        $course = Course::with('users');
        return view('course_user', compact('users', 'course'));
    }
}