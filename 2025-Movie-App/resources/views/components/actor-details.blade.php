@props(['first_name', 'last_name', 'image', 'age', 'story', 'movies', 'actor', 'title', 'interview_link' => null])

<?php
    use App\Models\Movie;
    $movies = Movie::orderBy('title')->get();
?>

<div class="max-w-2xl mx-auto p-6 bg-purple-300 rounded-lg shadow-md text-center">   
  
    <h2 class="text-2xl font-bold mb-4">{{ $first_name }} {{ $last_name }}</h2>
    <p class="text-gray-700 mb-6">{{ $age }}</p>
    
    <ul class="text-gray-800">
         @foreach($actor->movies as $movie) 
        <ul class="underline"><a href="{{ route("movies.show", $movie) }}">{{ $movie->title }}</a></ul>
        @endforeach
    </ul>
     @if ($interview_link)
        <div class="aspect-w-16 aspect-h-9">
            <iframe 
                class="w-full h-64 md:h-96 rounded-lg"
                src="https://www.youtube.com/embed/{{ $interview_link }}" 
                title="YouTube video player" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen> <!-- a Link to the Movie trailer by using the Youtube Id -->
            </iframe>
        </div>
    @endif  
    <p class="text-gray-700 mb-6">{{ $story }}</p>
      <img src="{{ asset('images/actor/' . $image) }}" 
         class="w-full md:w-38 h-auto rounded-lg mx-auto md:mx-0" />
</div> {{-- This is only shown in the show.blade as it is viewing the actors full details on what the move is about --}}

  </div>