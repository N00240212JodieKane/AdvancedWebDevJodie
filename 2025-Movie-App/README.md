
## First Week 29-09-25 --> 05-10-25

First was creating my ERD Diagram on what my first CA1 will be about. Through Tough Decision i first went with a Nintendo games Diagram however though lots of many to
many relationships not enough one to many relationships. I soon went with a another idea by doing Movies as my many to many relationship to them was the actors as theres many actors in many movies and awards for one to many as theres is one movie for many awards but only that specific award can get that movie.
Next was setting up the actually project itself on a framework called Laravel. Laravel is a framework that is open-sourced and allows web development to be more enjoyable in making.
It follows the MVC architecture which means Model, View and controller which help create different applications for your website to work. 
So Firstly install Laravel and choose starter kit as none and then phpunit. Then your package will download with a load of files that you can edited kinda like a starter pack to understand laravle more. Soon you can create a folder for your project I named mine 2025-Movie-App and gave it the same load out. then you will ask it to download laravel breeze which is a helpful pack to create login, registration and passwords, etc. 
Next was creating the blades for the index, edit, store and show, which I can edit for my Movie list. Then add a model called Movie which is the base and symbolises the database table I created for the movies and the Controlller called MovieController which controls each of the request comming in and what responses that is provided. 
Either before or after the Model/Controller you must have a database created. I called mine 2025-movie-app (all lowercase) then create a table in the database folder called movies and all attributes for it (use migrate which migrates it to the server which where your databases are kept). Next is to add a seeder called MovieSeedeer which controls what information you put in the database (make sure its the correct info for each). Then push the database and seeder with php artisan to your database root (phpmyadmin make sure xampp is on). 
Then you can run your server with php artisan serve and along with node.js (download) npm run dev which allows the user to edit the website while its still running live and updates if an edited is changed when its still running.

As for optional codes, I added a Movie traler link in which the User can click on the video and can show the trailer in the show.blade page.

codes: Model: php artisan make:model Movie
      Controller: php artisan make:controller MovieController
      database: php artisan migrate
      seeder: php artisan db:seed
      server: php artisan serev
      node.js: npm run dev

## Second Week 06-10-25 --> 12-10-25




























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



