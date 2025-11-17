@props(['first_name', 'last_name', 'image', 'age', 'story', 'movies', 'actor', 'title',])

<?php
    use App\Models\Movie;
    $movies = Movie::orderBy('title')->get();
?>

<div class="max-w-2xl mx-auto p-6 bg-purple-300 rounded-lg shadow-md text-center">
    <p class="text-gray-700 mb-6">{{ $age }}</p>
    <h2 class="text-2xl font-bold mb-4">{{ $first_name }} {{ $last_name }}</h2>
      
    <p class="text-gray-700 mb-6">{{ $story }}</p>  
    <ul class="text-gray-800">
         @foreach($actor->movies as $movie) 
        <ul class="underline"><a href="{{ route("movies.show", $movie) }}">{{ $movie->title }}</a></ul>
        @endforeach
    </ul>
      <img src="{{ asset('images/actor/' . $image) }}" 
         class="w-full md:w-38 h-auto rounded-lg mx-auto md:mx-0" />
</div> {{-- This is only shown in the show.blade as it is viewing the actors full details on what the move is about --}}

  </div>