
  {{-- If the user trys to access the create in the url they will be granted with a access deny as only the admin can access the create form --}}
    @if(session('error'))
    <div class="mb-4 px-4 py-2 bg-red-100 border-red-500 text-red-700 rounded-md">
        {{$slot}}
    </div>
    @endif

    
