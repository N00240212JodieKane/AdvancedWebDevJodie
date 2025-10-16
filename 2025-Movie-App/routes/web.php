<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); //Route to dashboard first thing to view when logged in or registered

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit'); //Route to edit your profile (Not done that yet no need for CA1 but keep so the we page works for a user)

Route::middleware('auth')->group(function () {
    Route::get('/movies', [MovieController::class, 'index'])->name('movies.index'); //Route to go to the main page
    Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create'); //Route to go to the create form
    Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movies.show'); //Route to go to the movie full details page
    Route::post('/movies', [MovieController::class, 'store'])->name('movies.store'); //Route to allow movies to be stored in the database when created/updated

    Route::get('movies/{movie}/edit', [MovieController::class, 'edit'])->name('movies.edit'); //Route when edited a movie it will be stored in the database
    Route::put('/movies/{movie}', [MovieController::class, 'update'])->name('movies.update'); //Route to update the movie in the database
    Route::delete('/movies/{movie}', [MovieController::class, 'destroy'])->name('movies.destroy'); //Route to delete the movie from the web page and database as a whole

    Route::get('/movies/search', [MovieController::class, 'search']); //To search for the movie in the index
});

require __DIR__.'/auth.php';
