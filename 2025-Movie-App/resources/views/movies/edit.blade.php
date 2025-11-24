<div>
    <x-app-layout>
        <x-slot name='header'>
           <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                     {{__('Edit Movie')}}
        </x-slot>

          <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="font-semibold text-lg mb-4">Edit New Movie</h3>     
                               {{-- Using the MovieForm component for movie edited --}}
                  <x-movie-form 
                  :action="route('movies.update', $movie)" 
                  method="PUT" 
                  :movie="$movie"
                  />
            </div>
        </div>
    </div>
    </x-app-layout>
</div>
