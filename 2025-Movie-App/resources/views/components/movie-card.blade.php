<div>
    <!-- Allows the databse to run through and show the different ids stated-->
    @props(['title', 'movie_url'])

    <!-- Design of the Movie Card displayed on the screen on the web-->
 <div class="max-w-2xl mx-auto bg-pink rounded-lg shadow-md p-6 text-center">
    <h2 class="text-xl font-semibold mb-4">{{ $title }}</h2>
    <div class="flex justify-center mb-4">
       <img src="{{ asset( 'images/movies/' . $movie_url ) }}" 
         class="w-full md:w-48 h-auto rounded-lg mx-auto md:mx-0" />
    </div>    
</div>
</div>  