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
                    :title="$movie->title" {{-- This recieves any movies thats in the database and puts it on the web page in their ID order --}}
                    :release_date="$movie->release_date" {{-- This recieves any movies thats in the database and puts it on the web page in their ID order --}}
                    :movie_url="$movie->movie_url" {{-- This recieves any movies thats in the database and puts it on the web page in their ID order --}}
                    :trailer_link="$movie->trailer_link" {{-- This recieves any movies thats in the database and puts it on the web page in their ID order --}}
                    :description="$movie->description" {{-- This recieves any movies thats in the database and puts it on the web page in their ID order --}}
                />
            </div>
        </div>
    </div>
</x-app-layout> {{-- A web page leading to the details of a one singular movie with just one click to view. --}}
