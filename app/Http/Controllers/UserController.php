<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showUserProfile($id)
    {
        $user = User::with('profile')->findOrFail($id);
        return view('users.profile', compact('user'));
    }

    public function showUserCourses($id)
    {
        $user = User::with('courses')->findOrFail($id);
        return view('users.courses', compact('user'));
    }
}
