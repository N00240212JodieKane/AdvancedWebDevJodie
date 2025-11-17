<div>
    <!-- Allows the databse to run through and show the different ids stated-->
    @props(['title', 'movie_url', 'release_date'])

    <!-- Design of the Movie Card displayed on the screen on the web-->
 <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-6 text-center">

    <h2 class="text-xl font-bold mb-4">{{ $title }}</h2> 
    <p class="text-gray-700 mb-6">{{ $release_date }}</p>
    <div class="flex justify-center mb-4">
       <img src="{{ asset( 'images/movies/' . $movie_url ) }}" {{-- Movie image link to recieve and show the image --}}
         class="w-full md:w-48 h-auto rounded-lg mx-auto md:mx-0" style="height: 300px; width:250px;" />
    </div>    
</div>
</div>  

