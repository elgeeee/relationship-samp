<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function showAllProfiles()
    {
        $profiles = Profile::with('user')->get();
        return view('profiles.index', compact('profiles'));
    }
}
