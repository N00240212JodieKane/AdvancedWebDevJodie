<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Movies') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="font-semibold text-lg mb-4">List of Movies</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach ($movies as $movie)
                        <a href="{{ route('movies.show', $movie) }}" class="block hover:shadow-lg rounded-lg transition">
                            <x-movie-card
                                :title="$movie->title"
                                :movie_url="$movie->movie_url"
                            />
                        </a>
                    @endforeach

                 <!-- Should pop up if the craetion of the new movie is successful--> 
                  <x-alert-success>
                    {{ session('success')}}
                  </x-alert-success>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
