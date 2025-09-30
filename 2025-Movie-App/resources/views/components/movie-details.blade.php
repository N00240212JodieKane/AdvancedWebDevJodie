<div>
    @props(['title', 'movie_url', 'description',])

    

    <div class='border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300'>
        <h4 class='text-align:center font-bold text-lg' style="font-size: 3rem">{{ $title }}</h4></div>
     <div class="flex justify-center">  
  <img src="{{asset( 'images/movies/' . $movie_url . '.jpg')}}" alt="{{$title}}">
</div>
    <h6 class='font-light' style="font-size: 2rem">{{ $description }}</h6> 
    </div>
</div>