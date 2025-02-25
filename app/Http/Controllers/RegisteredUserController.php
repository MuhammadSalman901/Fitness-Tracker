<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // dd(request()->all());
        // Validate User data
        $userData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|lowercase|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Validate Profile data (including image)
        $profileData = $request->validate([
            'name' => 'required|string|max:255',
            'Bio' => 'required|string',
            'image_path' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ]);

        // Handle image upload
        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('images', 'public');
            $profileData['image_path'] = $imagePath;
        }

        // Create the User
        $user = User::create($userData);

        // Create the Profile linked to the User
        $user->profile()->create($profileData);

        // Log in the new user
        Auth::login($user);

        return redirect('/');
    }
}
