<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <x-actor-details
            :actor="$actor"
    :first_name="$actor->first_name"
    :last_name="$actor->last_name"
    :image="$actor->image"
    :age="$actor->age"
    :story="$actor->story"
    :movies="$actor->movies"
/>

            </div>
    </div>
</x-app-layout> {{-- A web page leading to the details of a one singular movie with just one click to view. --}}
