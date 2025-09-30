
<div>
    <x-app-layout>
        <x-slot name='header'>
            <h2 class='font-semibold text-x1 text-gray-800 leading-tight'>
                {{__('All Movies')}}
            </h2>

        </x-slot>
        <div class='py-12'>
            <div class='max-w-7x1 mx-auto sm:px-6 lg:px-8'>
                <div class='bg-white overflow-hidden shadow-sm md:rounded-md'>
                    <div class='p-6 text-gray-900'>
                        <h3 class='font-semibold text-lg mb-4'>List of Movies</h3>
                             <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-8">
                          @foreach($movies as $movie)
                           <a href="{{ route('movies.show', $movie) }}">
                           <x-movie-card
                            :title="$movie->title"
                            :movie_url="$movie->movie_url"
                            :description="$movie->description"
                            />
                            </a>
                          @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</div>
