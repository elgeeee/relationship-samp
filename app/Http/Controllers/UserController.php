<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\Profile;

class UserController extends Controller
{
    public function create()
    {
        $courses = Course::all();
        return view('create', compact('courses'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'course_ids' => 'required|array',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        $user->profile()->create([
            'bio' => $request->bio,
        ]);

        $user->courses()->attach($validated['courses']);
        
        return redirect()->route('showUsers', $user->id)
            ->with('success', 'User created and added to courses successfully.');
    }


    public function showUsers() 
    {
        $profiles = Profile::with('user')->get();
        $users = User::with('courses')->get();
        $courses = Course::all();
        return view('users', compact('users', 'profiles', 'courses'));
    }

    public function showUserProfile(User $user, Request $request)
    {
        $profile = $user->load('profile')->profile;
        if (!$profile) {
            $profile = null;  
        }
        return view('profiles', compact('user', 'profile'));
    }

    public function showUserCourse(User $user, Request $request) 
    {
        $courses = $user->load('courses')->courses;
        return view('user_courses', compact('user', 'courses'));
    }
}