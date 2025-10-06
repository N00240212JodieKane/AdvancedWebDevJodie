<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $movie->title }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <x-movie-details
                    :title="$movie->title"
                    :release_date="$movie->release_date"
                    :movie_url="$movie->movie_url"
                    :trailer_link="$movie->trailer_link"
                    :description="$movie->description"
                />
            </div>
        </div>
    </div>
</x-app-layout>
