<div>
    @props(['title', 'movie_url', 'description',])

    

    <div class='border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300'>


        <h1 class='font-bold text-black-600 mb-2' style='font-size: 3rem'>{{ $title }}</h1>



        <img src="{{asset( 'images/movies/' . $movie_url . '.jpg')}}" alt="{{$title}}">



        <h6 class='font-light text-sm'>{{ $description }}</h6>


        <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID" 
        title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                
    </div>
</div>