<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserProfiles;

class UserProfileController extends Controller
{
    public function index()
    {
        return response()->json(UserProfiles::all(), 200);
    }

    public function show(UserProfiles $profile)
    {
        return response()->json($profile, 200);
    }

    public function destroy(UserProfiles $profile)
    {
        $profile->delete();
        return response()->json(['message' => 'Profile deleted successfully'], 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'profile_description' => 'nullable|string|max:500',
        ]);

        $profile = UserProfiles::create($validated);
        return response()->json($profile, 201);
    }

    public function update(Request $request, UserProfiles $profile)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'profile_description' => 'nullable|string|max:500',
        ]);

        $profile->update($validated);
        return response()->json($profile, 200);
    }
}
