<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{

    private function extractYoutubeId($url)
{
    if (!$url) return null;

    // Short URL: youtu.be/VIDEO_ID
    if (preg_match('/youtu\.be\/([^\?&]+)/', $url, $matches)) {
        return $matches[1];
    }

    // Embed URL: youtube.com/embed/VIDEO_ID
    if (preg_match('/youtube\.com\/embed\/([^\?&]+)/', $url, $matches)) {
        return $matches[1];
    }

    // Standard URL: youtube.com/watch?v=VIDEO_ID
    $query = parse_url($url, PHP_URL_QUERY);
    parse_str($query ?: '', $params);

    return $params['v'] ?? null;
}

    /**
     * Display a listing of the resource.
     */
   public function index()
{
    $movies = Movie::all();
    return view('movies.index', compact('movies'));
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
    public function store(Request $request, Movie $movie)
    {
        $movie->trailer_link = $request->trailer_link;
        $movie->youtube_id = $this->extractYoutubeId($movie->trailer_link);
        $movie->save();
        return redirect()->route('')->with('success','');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        //
    }



}
