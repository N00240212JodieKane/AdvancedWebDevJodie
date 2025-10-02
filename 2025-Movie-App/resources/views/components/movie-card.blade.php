<div>
    @props(['title', 'movie_url', 'description', 'trailer_link' => null])

 <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-6 text-center">
    <h2 class="text-xl font-semibold mb-4">{{ $title }}</h2>
    <div class="flex justify-center mb-4">
       <img src="{{ asset( 'images/movies/' . $movie_url . '.jpg') }}" 
       
         class="w-full md:w-48 h-auto rounded-lg mx-auto md:mx-0" />
    </div>
    <p class="text-gray-700">{{ $description }}</p>

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
</div>  