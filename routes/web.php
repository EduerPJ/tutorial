<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\Types\Resource_;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {     // TODO comando
    Artisan::call('user:mail',[
        'id' => 11, '--flag' => 'Flag user'
    ]);
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
    Route::get('my-posts', 'PostController@myPosts')->name('my-posts');
});

use App\Jobs\UserEmailWelcome;


Route::get('/mail', function(){
    UserEmailWelcome::dispatch(App\User::find(1))->delay(now()->addSecond(10));
    return 'Done!';
});