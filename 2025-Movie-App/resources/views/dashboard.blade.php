<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }} {{-- The let the user know their login worked and can access the website --}}
                </div>
            </div>

            <img src="{{ asset('images/movies/logo.jpg') }}" alt="Logo" class="block mx-auto mt-6 w-65"> {{-- added an image to spruce up the page --}}
        </div>
    </div>
</x-app-layout>
