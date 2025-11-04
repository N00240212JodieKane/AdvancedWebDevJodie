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

            {{-- Award Votes --}}
            <h4 class="font-semibold text-md mt-8">Award Vote</h4>
        @if ($movie->awards->isEmpty())
    <p class="text-gray-600">No Votes yet</p>
@else
    <ul class="mt-4 space-y-4">
        @foreach ($movie->awards as $award)
            <li class="bg-purple-200 p-5 rounded-lg">
                <p class="font-semibold">{{ $award->user->name }}</p>
                <p>Awards: {{ $award->enum }}</p>
                <p>{{ $award->comment }}</p>
            </li>
        @endforeach
    </ul>
@endif


                    {{--Add Award Votes --}}
                      @if(auth()->user()->role === 'user') {{-- Only User Can Access --}}
           <h4 class="font-semibold text-md mt-8">Vote for Award</h4>
           <form action="{{ route('awards.store', $movie) }}" method="POST" class="mt-4"> {{-- Stores the vote --}}
            @csrf
            <div class="mb-4">
                <label for="enum" class="black font-medium text-sm text-gray-600">Award</label>
                <select name="enum" id="enum" class="mt-4 block w-full" required>
                    <option value="1">Oscar</option>
                    <option value="2">Golden Globe</option>
                    <option value="3">BAFTA</option>
                    <option value="4">Emmy</option>
                    <option value="5">Cannes</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="comment" class="black font-medium text-sm text-gray-600">Comment</label>
                <textarea name="comment" id="comment" rows="3" class="mt-1 block w-full" placeholder="Your Opinion on Your decision"></textarea>
            </div>

            <button type="submit" class="bg-purple-100 hover:bg-purple-700 text-white font-semibold py-2 px-4 rounded">
                Submit Your Vote!!
            </button>
           </form>
        </div>
        @endif
    </div>
</x-app-layout> {{-- A web page leading to the details of a one singular movie with just one click to view. --}}
