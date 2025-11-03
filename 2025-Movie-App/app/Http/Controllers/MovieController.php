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


public function index(Request $request)
{
    $search = $request->input('search'); //Search a Movie by its title to request to search

    $movies = Movie::query(); //Fetch Movie from query

    if ($search) {
        $movies->where('title','like', '%' . $search . '%');
    } //The title will pop up depending on what movie you searched up

    $movies = $movies->get(); //Recieves the Movie

    return view ('movies.index', compact('movies')); //Returns when complete to index
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('movies.index')->with('error', 'Access Denied');
        }
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
    $movie = Movie::find($id); // or use findOrFail($id) for automatic 404

    if (!$movie) {
        // Optional: redirect or show custom error if movie not found
        return redirect()->route('movies.index')->with('error', 'Movie not found');
    }

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
 // In update()
$request->validate([
    'title' => 'required',
    'release_date' => 'required',
    'movie_url' => 'nullable|image|mimes:jpg,png,jpeg,gif',
    'description' => 'required|max:800',
    'trailer_link' => 'required'
]);


    // Keep old image unless a new one is uploaded
    $imageName = $movie->movie_url;

    if ($request->hasFile('movie_url')) {
        $imageName = time().'.'.$request->movie_url->extension();
        $request->movie_url->move(public_path('images/movies'), $imageName);
    }

    // Update record
    $movie->update([
        'title' => $request->title,
        'release_date' => $request->release_date,
        'movie_url' => $imageName,
        'description' => $request->description,
        'trailer_link' => $request->trailer_link
    ]);

    return to_route('movies.show', $movie)
        ->with('success', 'Movie updated successfully');
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
