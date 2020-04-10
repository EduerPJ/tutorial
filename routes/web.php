<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('posts', 'PostController');
Route::resource('comments', 'CommentController');