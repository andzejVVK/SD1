<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ConferenceController extends Controller
{
    
    public function index()
{
    $conferences = Conference::all();
    return view('welcome', compact('conferences'));
}

public function show(Conference $conference)
{
    return view('conference.show', compact('conference'));
}

    public function conference(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string',
        ]);
    
        $conference = Conference::create([
            'name' => $request->input('name'),
            'date' => $request->input('date'),
            'location' => $request->input('location'),
        ]);
    
        return view('conference', compact('conference'));
    }
    

    public function update(Request $request, Conference $conference)
    {
        $request->validate([
            'name' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string',
        ]);

        $conference->update([
            'name' => $request->input('name'),
            'date' => $request->input('date'),
            'location' => $request->input('location'),
        ]);

        return response()->json($conference, 200);
    }

    public function destroy(Conference $conference)
    {
        $conference->delete();
        return response()->json(null, 204);
    }
}
