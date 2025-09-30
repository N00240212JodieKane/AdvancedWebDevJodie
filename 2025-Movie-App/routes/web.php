<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

Route::middleware('auth')->group(function () {
    Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
    Route::get('/movies/create', [MovieController::class, 'create'])->name('movie.create');
    Route::get('/movies/{movie}', [MovieController::class, 'show'])->name('movies.show');
    Route::post('/movies', [MovieController::class, 'store'])->name('movies.store');

    Route::get('movies/{movie}/edit', [MovieController::class, 'edit'])->name('movies.edit');
    Route::put('/movies/{movie}', [MovieController::class, 'update'])->name('movies.update');
    Route::delete('/movies', [MovieController::class, 'destroy'])->name('movies.destroy');
});

require __DIR__.'/auth.php';
