<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('home');
// });


// Route::post('/register' , function() {
//      return 'thank you';
// });


Route::get('/', function () {
    return view('home');
});

//  what should happen for all urlpattern in the website

// when we send request to / -- returns the home

// remove the inline function and replace it with the controller method
//name of function and name methode  in the class


Route::post('/register' , [ UserController::class , 'register']);
Route::post('/logout' , [ UserController::class , 'logout']);

