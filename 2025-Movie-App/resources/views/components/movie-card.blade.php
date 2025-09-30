<div>
    @props(['title', 'movie_url', 'description'])

    

    <div class='border rounded-lg shadow-md p-3 bg-white hover:shadow-lg transition duration-300'>
        <h4 class='font-bold text-lg'>{{ $title }}</h4>
        <img src="{{asset( 'images/movies/' . $movie_url . '.jpg')}}" alt="{{$title}}">
        <h6 class='font-light text-sm'>{{ $description }}</h6>
                
    </div>
</div>