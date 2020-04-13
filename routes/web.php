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

/* 
Content Servide Providers | Kernel | generando un nuevo provider | config método register | inyectrlo acá
Route::get('/paypal', function(App\Models\Paypal $paypal){
    return $paypal->doSomething();
}); */


// Inyectar una clase por medio de un Facade
// Generar un nuevo provider make:provider nameProvider y confi método register | register en app.php y add alias
Route::get('/paypal', function(){
    return Payment::doSomething();
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
