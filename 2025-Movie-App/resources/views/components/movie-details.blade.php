@props(['title', 'movie_url', 'description', 'trailer_link' => null, 'release_date'])

<div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md text-center">
    <p class="text-gray-700 mb-6">{{ $release_date }}</p>
    
    <h2 class="text-2xl font-bold mb-4">{{ $title }}</h2>

    <img src="{{ asset('images/movies/' . $movie_url . '.jpg') }}" 
         class="w-full h-auto rounded-lg mb-4 mx-auto" />

    <p class="text-gray-700 mb-6">{{ $description }}</p>
    
     <!-- a Link to the Movie trailer by using the Youtube Id -->
    @if ($trailer_link)
        <div class="aspect-w-16 aspect-h-9">
            <iframe 
                class="w-full h-64 md:h-96 rounded-lg"
                src="https://www.youtube.com/embed/{{ $trailer_link }}" 
                title="YouTube video player" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>
        </div>
    @endif
</div>
