
    <!-- create view will display the form to add the new movie -->

    @props(['action', 'method', 'movie'])

<?php
    use App\Models\Actor;
$actors = Actor::orderBy('first_name')->get();
?>

    <!--Creates the form and allows the user to recieve the data for the form to pop up on the web -->
    <form action="{{$action}}" method="POST" enctype="multipart/form-data">
        @csrf 
        @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
        @endif

        {{-- Title --}}
        <div class="mb-4">
            <label for="title" class="block text-sm text-gray-700">Title</label>
            <input 
            type="text"
            name="title"
            id="title"
            value="{{ old('title', $movie->title ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
            @error('title')
            <p class='text-sm text-red-600'>{{$message}}</p>
            @enderror
        </div>

        <!-- The images url to allow the image to be created -->
        <div class="mb-4">
            <label for="movie_url" class="block text-sm font-medium text-gray-700">Image</label>
            <input 
            type="file" {{-- Adding a file from desktop or any personal folders the user owns --}}
            name="movie_url"
            id="movie_url"
            {{ isset($movie) ? : 'required'}}
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"/>
            @error('movie_url')
            <p class='text-sm text-red-600'>{{$message}}</p>
            @enderror
        </div>

         {{-- Description --}}
          <div class="mb-4">
            <label for="description" class="block text-sm text-gray-700">Description</label>
            <input 
            type="text"
            name="description"
            id="description"
            value="{{ old('description', $movie->description ?? '') }}"
            required
            class="mt-1 block w-full border-gray-1000 rounded-md shadow-sm"/>
            @error('description')
            <p class='text-sm text-red-600'>{{$message}}</p>
            @enderror
        </div>

         {{-- Trailer Link (Youtube ID) --}}
            <div class="mb-4">
            <label for="trailer_link" class="block text-sm text-gray-700">Youtube Id</label>
            <input 
            type="text"
            name="trailer_link"
            id="trailer_link"
            value="{{ old('trailer_link', $movie->trailer_link ?? '') }}"
            required
            class="mt-1 block w-full border-gray-1000 rounded-md shadow-sm"/>
            @error('trailer_link')
            <p class='text-sm text-red-600'>{{$message}}</p>
            @enderror
        </div>

         {{-- Release Date --}}
               <div class="mb-4">
            <label for="release_date" class="block text-sm text-gray-700">Release Date</label>
            <input 
            type="date"
            name="release_date"
            id="release_date"
          value="{{ old('release_date', $movie->release_date ?? '') }}"
            required
            class="mt-1 block w-full border-gray-1000 rounded-md shadow-sm"/>
            @error('release_date')
            <p class='text-sm text-red-600'>{{$message}}</p>
            @enderror
        </div>
        

                <div>
        <label class="block font-semibold mb-2">Select Movies</label>

        @foreach($actors as $actor)
            <label class="inline-flex items-center mr-4 mb-2">
                <input 
                    type="checkbox" 
                    name="actors[]" 
                    value="{{ $actor->id }}"
                   {{ isset($movie) && $movie->actors->contains($actor->id) ? 'checked' : '' }}
                >
                {{ $actor->first_name }}{{ $actor->last_name }}
            </label>
        @endforeach
    </div>


        <!-- After creating pushed this to create the movie on the index page -->
       <x-primary-button>
   {{ isset($movie) ? 'Update Movie' : 'Add Movie' }}
</x-primary-button>



    </form>


    
    
