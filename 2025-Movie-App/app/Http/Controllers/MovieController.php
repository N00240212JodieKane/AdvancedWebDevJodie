<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    $movies = Movie::all(); //Fetch All Movies
    return view('movies.index', compact('movies')); //Return the view for all Movies
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
 public function store(Request $request)
{
    // Validate input
    $request->validate([
        'title' => 'required',
        'release_date' => 'required',
        'movie_url' => 'required|image|mimes:jpg,png,jpeg,gif',
        'description' => 'required|max:800',
        'trailer_link' => 'required'
    ]);

   // Handle file upload
    if ($request->hasFile('movie_url')) {
        $imageName = time().'.'.$request->movie_url->extension();
        $request->movie_url->move(public_path('images/movies'), $imageName);
    } 

    // Create the movie record
    Movie::create([
        'title' => $request->title,
        'release_date' => $request->release_date,
        'movie_url' => $imageName, // Just the filename, not full path
        'description' => $request->description,
        'trailer_link' => $request->trailer_link
    ]);

    return to_route('movies.index')->with('success', 'Movie created successfully');
}


    /**
     * Display the specified resource.
     */
   public function show($id)
{
    $movie = Movie::find($id); // Or however you're getting the movie
    return view('movies.show', compact('movie'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
          {
        return view('movies.edit')->with('movie', $movie);
    }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
            // Validate input
    $request->validate([
        'title' => 'required',
        'release_date' => 'required',
        'movie_url' => 'required|image|mimes:jpg,png,jpeg,gif',
        'description' => 'required|max:800',
        'trailer_link' => 'required'
    ]);

   // Handle file upload
    if ($request->hasFile('movie_url')) {
        $imageName = time().'.'.$request->movie_url->extension();
        $request->movie_url->move(public_path('images/movies'), $imageName);
    } 

    // Create the movie record
    $movie->update([
        'title' => $request->title,
        'release_date' => $request->release_date,
        'movie_url' => $imageName, // Just the filename, not full path
        'description' => $request->description,
        'trailer_link' => $request->trailer_link
    ]);

    return to_route('movies.index')->with('success', 'Movie Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
     $movie->delete();
     
     return to_route('movies.index')->with('success', 'Movie Deleted Success');
    
    }



}
