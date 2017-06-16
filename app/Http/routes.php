<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.php artisan serve --host=$IP --port=$PORT
|
*/

Route::get('/', 'MessagesController@index');

Route::resource('messages', 'MessagesController');