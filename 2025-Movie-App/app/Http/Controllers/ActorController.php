<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Movie;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $actors = Actor::with('movies')
            ->when($search, function($query, $search) {
                $query->where('first_name', 'like', '%' . $search . '%');
            })
            ->get();

        return view('actors.index', compact('actors'));
    }

    public function create()
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('movies.index')->with('error', 'Access Denied');
        }

        $movies = Movie::all();
        return view('actors.create', compact('movies'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif',
            'age' => 'required',
            'story' => 'required|max:800',
            'movies' => 'array',
        ]);

        // Upload image if exists
        if ($request->hasFile('image')) {
            $validated['image'] = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/actor/'), $validated['image']);
        }

        // Create actor ONCE
        $actor = Actor::create($validated);

        // Attach movies
        if ($request->has('movies')) {
            $actor->movies()->attach($request->movies);
        }

        return to_route('actors.index')->with('success', 'Actor created successfully');
    }

    public function show(Actor $actor)
    {
            // Load related movies for this actor
    $actor->load('movies');
        return view('actors.show', compact('actor'));
    }

public function edit($id)
{
    $actor = Actor::findOrFail($id);
    $movies = Movie::all();
    $actorMovies = $actor->movies->pluck('id')->toArray();

    return view('actors.edit', compact('actor', 'movies', 'actorMovies'));
}



    public function update(Request $request, Actor $actor)
    {
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif',
            'age' => 'required',
            'story' => 'required|max:800',
            'movies' => 'array',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $validated['image'] = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/actor/'), $validated['image']);
        }

        // Update actor without creating a new one
        $actor->update($validated);

        // Sync movie relationships
        if ($request->has('movies')) {
            $actor->movies()->sync($request->movies);
        } else {
            $actor->movies()->detach();
        }

        return to_route('actors.show', $actor)->with('success', 'Actor updated successfully');
    }

    public function destroy(Actor $actor)
    {
        $actor->movies()->detach();
        $actor->delete();

        return to_route('actors.index')->with('success', 'Actor Deleted Successfully');
    }
}
