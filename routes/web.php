<?php

use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\Types\Resource_;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');

});
Route::resource('posts', 'PostController');
Route::resource('comments', 'CommentController');


Route::resource('posts', 'PostController');
Route::resource('comments', 'CommentController');

// Pasar el argumento con un valor true
Auth::routes(['verify' => true]);


Route::group(['middleware' => 'verified'], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('posts', 'PostController');
});

