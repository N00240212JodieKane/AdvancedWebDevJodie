
<x-app-layout>
    <x-slot name="header">
     <h2 class="font-bold text-xl text-gray-800 leading-tight">
        {{ __('All Movies') }} {{-- Title of Page --}}
     </h2>
    </x-slot>

    <div class="grid grid-cols-4 md:grid-cols-2 gap:6">
        <form action="{{ route('movies.index') }}" method="GET">
            <input type="text" name="search" placeholder="Please Search For A Movie">
            <button type="submit">Search !</button>
        </form>
        <br><br> {{-- To not mess up the index and cause overlapping and a break away and space --}}

        @foreach ($movies as $movie) {{-- Loop through the movies and recieves them --}}
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
             <a href="{{ route('movies.show', $movie) }}" class="block mb-3 hover:shadow-md rounded-lg transition">
              <x-movie-card 
              :title="$movie->title" 
              :movie_url="$movie->movie_url"
              :release_date="$movie->release_date" 
              /> {{-- Recieves the movies from the database --}}
             </a>
        <div class="flex space-x-4 mt-auto">
            <a href="{{ route('movies.edit', $movie) }}" class="flex-1 text-center text-gray-600 bg-green-300 hover:bg-green-700 font-semibold py-2 rounded transition">
                EDIT
            </a> {{-- Route to edit --}}
            
            <form action="{{ route('movies.destroy', $movie) }}" method="POST"
            onsubmit="return confirm('Are You Sure You want to delete this Movie?')" class="flex-2">
            @csrf
            @method('DELETE')
            <button type="submit" class="flex-1 text-center bg-red-500 hover:bg-red-700 text-gray-600 font-semibold py-2 rounded transition">
                DELETE
            </button> {{-- Route to Delete --}}
        </form>
        </div>
        </div>
        @endforeach
    </div>
</x-app-layout>
