<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Movies') }}
        </h2>
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    @foreach ($movies as $movie)
        <div class="bg-white rounded-lg shadow p-4 flex flex-col justify-between h-full">
            <a href="{{ route('movies.show', $movie) }}" class="block mb-4 hover:shadow-lg rounded-lg transition">
                <x-movie-card
                    :title="$movie->title"
                    :movie_url="$movie->movie_url"
                />
            </a>
            <div class="flex space-x-2 mt-auto">
                <a href="{{ route('movies.edit', $movie) }}"
                   class="flex-1 text-center text-gray-600 bg-green-300 hover:bg-green-700 font-bold py-2 rounded transition">
                    Edit
                </a>

                <form action="{{ route('movies.destroy', $movie) }}" method="POST"
                      onsubmit="return confirm('Are you sure?');"
                      class="flex-1">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="w-full bg-red-500 hover:bg-red-700 text-gray-600 font-bold py-2 rounded transition">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    @endforeach
</div>

</x-app-layout>
