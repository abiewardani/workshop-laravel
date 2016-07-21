<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// routes yang belum di mapping dengan controller
Route::get('/hallo', function () {
   	echo "Hallo";
});


// routes di mapping dengan controller
Route::get('home', 'HomeController@hello');

// parsing parameter 

Route::get('home/{nama}', 'HomeController@cetakNama');