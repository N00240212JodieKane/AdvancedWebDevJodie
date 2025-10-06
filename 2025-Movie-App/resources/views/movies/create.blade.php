<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                     {{__('Create New Movie')}}

        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="font-semibold text-lg mb-4">Add a New Movie</h3>     
                               {{-- Using the MovieForm component for movie creation --}}

                  <x-movie-form :action="route('movies.store')" method="POST" :movie="new App\Models\Movie" />
            </div>
        </div>
    </div>
</x-app-layout>
