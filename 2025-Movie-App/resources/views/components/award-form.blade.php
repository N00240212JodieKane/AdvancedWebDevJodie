@props(['action', 'method' => 'POST', 'award' => null])

 <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
  @if($method === 'PUT' || $method === 'PATCH')
    @method($method)
@endif


     <div class="mb-4">
            <label for="award_names" class="block text-sm text-gray-700">Awards Names</label>
            <input 
            type="text"
            name="award_names"
            id="award_names"
            value="{{old('award_names', $award->award_names)}}"
            required
            class="mt-1 block w-full border-gray-1000 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500"/>
            @error('award_names')
            <p class='text-sm text-red-600'>{{$message}}</p>
            @enderror
        </div>

            <div class="mb-4">
            <label for="comment" class="block text-sm text-gray-700">Comment</label>
            <input 
            type="text"
            name="comment"
            id="comment"
            value="{{old('comment', $award->comment)}}"
            required
            class="mt-1 block w-full border-gray-1000 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500"/>
            @error('comment')
            <p class='text-sm text-red-600'>{{$message}}</p>
            @enderror
        </div>

               <x-primary-button>
    {{ isset($award) ? 'Update Award' : 'Add Award' }}
</x-primary-button>

   
 </form>

