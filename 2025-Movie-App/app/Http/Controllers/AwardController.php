<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Award;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    // Validate input
    $validated = $request->validate([
        'award_names' => 'required|string|max:255',
        'comment' => 'required|string|max:500',
        'movie_id' => 'required|exists:movies,id',
    ]);

    // Ensure user is logged in
    if (!auth()->check()) {
        return redirect()->back()->with('error', 'You must be logged in to submit an award.');
    }

    // Find the movie
    $movie = Movie::find($validated['movie_id']);

    if (!$movie) {
        return redirect()->back()->withErrors(['movie_id' => 'Selected movie does not exist']);
    }

    // Create the award linked to the movie and user
    $movie->awards()->create([
        'award_names' => $validated['award_names'],
        'comment' => $validated['comment'],
        'user_id' => auth()->id(),
    ]);

    // Redirect back to the movie page with success message
    return redirect()->route('movies.show', $movie->id)
                     ->with('success', 'Award submitted successfully!');
}


    /**
     * Display the specified resource.
     */
    public function show(Award $award)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Award $award)
    {
        if (auth()->user()->id !== $award->user_id && auth()->user()->role !== 'admin') {
            return redirect()->route('movies.index')->with('error', 'Access denied');
        }

        //Passing the movie and award to the view, they are both needed
           return view('awards.edit', compact('award'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Award $award)
    {
        //ensure that is authorised to update content 
        //Validate code
        //only enum (award name) and comment can be altered
        $award->update($request->only(['award_names', 'comment']));

        //Make sure it makes sense to the application
        return redirect()->route('movies.show', $award->movie_id)
                         ->with('success', 'Award Vote Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Award $award)
   {
     $award->delete();
     
     return to_route('movies.index')->with('success', 'Award Vote Deleted Success');
    
    }
}
