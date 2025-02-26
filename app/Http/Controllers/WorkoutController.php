<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkoutController extends Controller
{
    public function index()
    {
        // Fetch workouts for the authenticated user
        $workouts = Auth::user()->workouts()->paginate(6);

        // Pass the workouts to the view
        return view('workout.index', compact('workouts'));
    }

    public function create()
    {
        return view('workout.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'workout_name' => 'required|string|max:255',
            'workout_type' => 'required|string|max:255',
            'workout_duration' => 'required|integer|min:1',
            'workout_description' => 'required|string',
            'workout_date' => 'required|date'
        ]);

        Workout::create($validated);

        return redirect()->route('workout')->with('success', 'Workout created successfully!');
    }

    public function show(Workout $workout)
    {
        return view('workout.show', compact('workout'));
    }

    public function destroy(Workout $workout)
    {
        // Delete the workout
        $workout->delete();

        // Redirect with a success message
        return redirect()->route('workout')->with('success', 'Workout deleted successfully!');
    }
}
