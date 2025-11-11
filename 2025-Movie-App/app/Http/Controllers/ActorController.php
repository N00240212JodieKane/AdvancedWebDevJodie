<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
           $search = $request->input('search'); //Search a Movie by its title to request to search

    $actors = Actor::query(); //Fetch Movie from query

    if ($search) {
        $actors->where('first_name','like', '%' . $search . '%');
    } //The title will pop up depending on what actor you searched up

    $actors = $actors->get(); //Recieves the actor

    return view ('actors.index', compact('actors')); //Returns when complete to index
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('actors.index')->with('error', 'Access Denied');
        }
        return view('actors.create');
    }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          // Validate input
    $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'image' => 'required',
        'age' => 'required',
        'story' => 'required|max:800'
    ]);

   // Handle file upload
    if ($request->hasFile('image')) {
        $imageName1 = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/actor'), $imageName1);
    } 

    // Create the movie record
    Actor::create([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'image' => $imageName1, // Just the filename, not full path
        'age' => $request->age,
        'story' => $request->story
        
    ]);

    return to_route('actors.index')->with('success', 'Actor created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Actor $actor)
    {
        return view('actors.show', compact('actor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Actor $actor)
    {
         {
        return view('actors.edit')->with('actor', $actor);
    }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Actor $actor)
    {
        // In update()
    $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'image' => 'required',
        'age' => 'required',
        'story' => 'required|max:800'
    ]);

    // Keep old image unless a new one is uploaded
    $imageName1 = $actor->image;

  // Handle file upload
    if ($request->hasFile('image')) {
        $imageName1 = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/actor'), $imageName1);
    } 

    // Update record
    $actor->update([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'image' => $imageName1, // Just the filename, not full path
        'age' => $request->age,
        'story' => $request->story
    ]);

    return to_route('actors.show', $actor)
        ->with('success', 'actor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Actor $actor)
    {
         $actor->delete();
     
     return to_route('actors.index')->with('success', 'Actor Deleted Success');
    
    }
}
