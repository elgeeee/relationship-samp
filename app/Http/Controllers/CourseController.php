<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;


class CourseController extends Controller
{
    public function showCourseUsers(Request $userId, $courseId)
    {
        $user = User::find($userId);
        $course = Course::find($courseId);

        
        return view('course_user', compact('course'));
    }
}