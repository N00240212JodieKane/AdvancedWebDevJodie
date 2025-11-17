
    <!-- create view will display the form to add the new movie -->

    @props(['action', 'method', 'actor', 'movie', 'actorMovies'=> [] ])

    <?php
 
use App\Models\Movie;
$movies = Movie::orderBy('title')->get();
?>
  


    <!--Creates the form and allows the user to recieve the data for the form to pop up on the web -->
    <form action="{{$action}}" method="POST" enctype="multipart/form-data">
        @csrf 
        @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
        @endif

        {{-- First Name --}}
        <div class="mb-4">
            <label for="first_name" class="block text-sm text-gray-700">First Name</label>
            <input 
            type="text"
            name="first_name"
            id="first_name"
            value="{{ old('first_name', $actor->first_name ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
            @error('first_name')
            <p class='text-sm text-red-600'>{{$message}}</p>
            @enderror
        </div>

                <div class="mb-4">
            <label for="last_name" class="block text-sm text-gray-700">Last Name</label>
            <input 
            type="text"
            name="last_name"
            id="last_name"
            value="{{ old('last_name', $actor->last_name ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
            @error('last_name')
            <p class='text-sm text-red-600'>{{$message}}</p>
            @enderror
        </div>

        <!-- The images url to allow the image to be created -->
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
            <input 
            type="file" {{-- Adding a file from desktop or any personal folders the user owns --}}
            name="image"
            id="image"
            {{ isset($actor) ? : 'required'}}
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"/>
            @error('image')
            <p class='text-sm text-red-600'>{{$message}}</p>
            @enderror
        </div>

         {{-- age --}}
                  <div class="mb-4">
            <label for="age" class="block text-sm text-gray-700">Age</label>
            <input 
            type="text"
            name="age"
            id="age"
            value="{{ old('age', $actor->age ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
            @error('age')
            <p class='text-sm text-red-600'>{{$message}}</p>
            @enderror
        </div>



         {{-- Bio --}}
            <div class="mb-4">
            <label for="story" class="block text-sm text-gray-700">Story</label>
            <input 
            type="text"
            name="story"
            id="story"
            value="{{ old('story', $actor->story ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
            @error('story')
            <p class='text-sm text-red-600'>{{$message}}</p>
            @enderror
        </div>

         <div>
        <label class="block font-semibold mb-2">Select Movies</label>

        @foreach($movies as $movie)
            <label class="inline-flex items-center mr-4 mb-2">
                <input 
                    type="checkbox" 
                    name="movies[]" 
                    value="{{ $movie->id }}"
                    {{ in_array($movie->id, $actorMovies) ? 'checked' : '' }}
                >
                {{ $movie->title }}
            </label>
        @endforeach
    </div>

        <!-- After creating pushed this to create the Actor on the index page -->
       <x-primary-button>
    {{ isset($movie) ? 'Update Actor' : 'Add Actor' }}
</x-primary-button>



    </form>


    
    
