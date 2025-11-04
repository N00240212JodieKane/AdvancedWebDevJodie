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
    public function store(Request $request, Movie $movie)
    {
        $request->validate([
            'comment' => 'required',
            'enum' => 'required',
            'movie_id' => 'nullable|exists:movies,id'
        ]);


        //Give your opinion on the award
         $movie->awards()->create([
            'enum' => $request->input('enum'),
            'comment' => $request->input('comment'),
            'user_id' => auth()->id(),
            
        ]);

        return redirect()->route('movies.show', $movie)->with('success','Award Vote Completed'); //Redirect if its success 

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Award $award)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Award $award)
    {
        //
    }
}
