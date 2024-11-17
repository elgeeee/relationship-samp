<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showUserProfile($id)
    {
        $profiles = Profile::with('user')->get();
        $user = User::with(['profile', 'courses'])->findOrFail($id);
        $courses = Course::all();
        return view('profiles', compact('profiles', 'courses'));
    }
}