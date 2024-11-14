<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showUserProfile(User $user, Request $request)
    {
        $profile = $user->load('profile')->profile;
        if (!$profile) {
            $profile = null;  
        }
        return view('profiles', compact('user', 'profile'));
    }

    public function showUserCourse(User $user, Request $reqeust) 
    {
        $courses = $user->load('courses')->courses;
        return view('user_courses', compact('user', 'courses'));
    }
}