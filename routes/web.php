<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('test', function () {
    return 'Hello world';
});
Route::get('user/{id}', function ($id) {
    return 'User '.$id;
})-> where (/*'name'=>[A-Za-z]+']*/['id'=>'[0-9]+']);