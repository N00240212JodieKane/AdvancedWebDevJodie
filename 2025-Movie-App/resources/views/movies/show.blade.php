<div>
    <x-app-layout>
        <x-slot name='header'>
            <h2 class='font-semibold text-x1 text-gray-800 leading-tight'>
                {{__('All Movies')}}
            </h2>

        </x-slot>

        <div class='py-12'>
              <div class="flex justify-center items-center min-h-screen bg-gray-100 p-6">
                <div class='bg-white overflow-hidden shadow-sm sm:rounded-lg'>
                    <div class='p-6 text-gray-900'>
                        <h3 class='font-semibold text-lg mb-4'>Movie Details</h3>
                                <x-movie-details
                                :title='$movie->title'
                                :movie_url='$movie->movie_url'
                                :description='$movie->description'
                                />
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</div>
