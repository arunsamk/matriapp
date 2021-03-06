<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Get Requests

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', 'MusersController@registerview');

Route::get('/about', 'MusersController@aboutview');

Route::get('/profile', 'MusersController@profileview');

Route::get('/login', 'MusersController@loginview');

// Post Request

Route::post('/register', 'MusersController@userstore');