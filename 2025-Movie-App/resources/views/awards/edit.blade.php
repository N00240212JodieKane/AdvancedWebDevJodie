<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Award Vote') }}
        </h2>
    </x-slot>

          <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="font-semibold text-lg mb-4">Edit Award</h3>     
                               {{-- Using the AwardForm component for movie edited --}}
                  <x-award-form 
                  :action="route('awards.update', $award)" 
                  method="PUT" 
                  :award="$award" />
            </div>
        </div>
    </div>
</x-app-layout>