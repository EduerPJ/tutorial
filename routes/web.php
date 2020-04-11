<?php

use App\Models\Comment;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Resource_;

Route::get('/', function () {
    return view('welcome');

})->middleware('language');

Route::resource('posts', 'PostController');
Route::resource('comments', 'CommentController');