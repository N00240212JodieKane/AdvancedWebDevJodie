<?php

use App\Http\Controllers\PlantController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//the /plants route will call the index() method of PlantController 
Route::get('/suppliers', [SupplierController::class, 'index']);
