## NOTE
For the Github Messages I forgot to write a message during the first week.
So heres what each one means:
web.php is just editing the web page for the routes of my movie list
.env trying to get the database to work successfully
Movie.php making the model and editing fixtures to it
composer.json fixing the json file
MovieCard.php Adding stuff to the movie card
show.blade.php wanting to separate the card and details of movies to fixing the show alongside it.
MovieController fixing anything or adding into the main Controller of the project.
README.md adding the first summary of what happened that week.

## First Week 29-09-25 --> 05-10-25

First was creating my ERD Diagram on what my first CA1 will be about. Through Tough Decision I first went with a Nintendo games Diagram however though lots of many to
many relationships not enough one to many relationships. I soon went with a another idea by doing Movies as my many to many relationship to them was the actors as theres many actors in many movies and awards for one to many as theres is one movie for many awards but only that specific award can get that movie.
Next was setting up the actually project itself on a framework called Laravel. Laravel is a framework that is open-sourced and allows web development to be more enjoyable in making and helps make the website more organised.
It follows the MVC architecture which means Model, View and controller which help create different applications for your website to work. 
So Firstly install Laravel and choose starter kit as none and then phpunit. Then your package will download with a load of files that you can edited kinda like a starter pack to understand laravel more. Soon you can create a folder for your project I named mine 2025-Movie-App and gave it the same load out. then you will ask it to download laravel breeze which is a helpful pack to create login, registration and passwords, etc. 
Next was creating the blades for the index, edit, store and show, which I can edit for my Movie list. Then add a model called Movie which is the base and symbolises the database table I created for the movies and the Controlller called MovieController which controls each of the request coming in and what responses that is provided, edit each of the eloquents (public functions). 
Either before or after the Model/Controller you must have a database created. I called mine 2025-movie-app (all lowercase) then create a table in the database folder called movies and all attributes for it (use migrate which migrates it to the server which where your databases are kept). Next is to add a seeder called MovieSeedeer which controls what information you put in the database (make sure its the correct info for each). Then push the database and seeder with php artisan to your database root (phpmyadmin make sure xampp is on). 
Then you can run your server with php artisan serve and along with node.js (download) npm run dev which allows the user to edit the website while its still running live and updates if an edited is changed when its still running.
View is also what the user sees on the website using the html given to them and what they created.

As for optional codes, I added a Movie traler link in which the User can click on the video and can show the trailer in the show.blade page.

codes: Model: php artisan make:model Movie
      Controller: php artisan make:controller MovieController
      database: php artisan migrate
      seeder: php artisan db:seed
      server: php artisan serev
      node.js: npm run dev

## Second Week 06-10-25 --> 12-10-25

For the second week of my Laravel CA1 project, I created a CRUD which is used to create, edit and delete a movie of choice. 
Firstly was making the create crud which will allow the user to create a new movie that will be put on to the website and into the database that will be stored. How that happens is to first make sure that your web.php has a route to movies.create.php that it will work and be available to visit the url. Next was to edit the MovieController eloquent public function create request so when the user creates a new movie the controller can handle the request and return the response to allow the new movie to be created. Next was fixing up the navbar is the layouts folder which is putting another route to the create crud on the navbar. 
Next is to make the crud itself , first though create a MovieForm which will be like the create view form for the movies. Use the PHP artisan make to make the component MovieForm. Next create what prompts you will add for each of the attributes in the database (make sure its the correct one for each), example title and its input will be text and the movie_url (image) which is a file uploader. Now go into the create blade and edit it in which the code will show what the form will load into. Now you need to create the store function which is when once the data you create in the form is validated it will insert the movie created from the form on the index page. Make sure to have an error message for each like for description it must be required and a max words of 500. 
For the image which is the movie_url when your putting in a image do not take it from the public folder in the laravel application. This is because the laravel is only for the programmer not the user, if the user is using the crud and wants to put an image in the crud they must use their own personal folder on their own device like their desktop or downloads folder etc. 
Now if you want, I put in a success message in which if the new movie is created, it will appear on the index page. First make a component called AlertSuccess. Next create the success design and then put a x-alert-success which success in it in the index blade.
Now test it, first you will get an error for something called mass assignment. Mass assignment is when its the process of assigning multiple attributes to a model in a whole single step rather than individually. 
So in my Movie.php model I put a protected fillable for all my attributes since I am assigning to them all. Now the crud should work now.
Next was the edit and delete. First make sure your route in web.php is in for edit and delete/destroy (any works). Next create another route in the index page for edit and delete and update, this will assign each of the movies on your index and button for both edit and delete under each movie. Now first the edit, The edit crud is the exact same for the create so I kept the MovieForm for both. In the edit blade make sure to link back to the MovieForm and route it instead to the movie update and the method instead should be PUT. The update() eloquent is the same for the store but instead of creating I am updating and returns the lsit with updated successfully.
For the Delete now is quite simple, all you need to do is go into MovieController eloquent being delete and when you delete the movie it shoould just stay in the index since the delete button was there and with a success being Movie was deleted. Also in the index blade for delete there should be a prompt for are you sure you want to delete this movie on the top when I click the delete button.

For the optional code, I created a search bar so i created an input in my index blade for serach. Then went into MovieController and changed a bit for the eloquent index which is you type in the movies title in the search it will fetch the movie with the title name and wll recieve it.

Also between edited any other blades that needed fixing too.

Also found a tailwind code that allows me to create different colors i put it in the tailwind.config

codes: php artisan make:component MovieForm
       php artisan make:component AlertSuccess

## Third Week 13-10-25 --> 19-10-25

For the Third week of the assignment, there wasnt much more to do as everything was prepped. Though I had an issue with the search bar since the method was gone got GET unexpectedally, I was able to fix the issue. Another was centering the buttons for edit and delete underneath each movie but i was able to centre it in the end. I also customised the dashboard by adding an image to spruce it up more. Overall it was just fixing bugs and adding any remainder comments to each of the blade in this project explaing my understanding of Laravel.


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).



