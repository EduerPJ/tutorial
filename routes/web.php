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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts', 'PostController');

Route::get('/users', function () {
    dd(App\User::with(['posts'])->first()->posts->first()->title);
});


Route::get('/users-posts', function () {
    $user = App\User::with(['posts'])->where('id', 1)->get();
    dd($user);
});

Route::get('/users-posts-eva', function () {
    $user = App\User::with(['posts' => function ($query) {
        // Restringir a los posts
        $query->where('id', 6);
    }])->where('id', 4)->get();
    dd($user);
});

// --------------------------
Route::get('/posts-comments', function () {
    $comments = App\Models\Post::find(1)->comments;
    foreach ($comments as $comment);
    return ($comment->content);
});


Route::get('/comments-user', function () {
    return (App\Models\Comment::with(['user'])->first()->user->name);
});

Route::get('/comment-post', function(){
    $comment = (App\Models\Comment::with(['post'])->first()->post->title);
    return ($comment);
});


// Route::view('/vue', 'vue');

// Route::get('/basededatos', function(){
//     try {
//         DB::connection()->getPdo();
//     }catch(\Exception $e){
//         die("No se ha podido conectar a la database: Por favor revise su configuración. 
//         eror: " . $e);
//     }
// });
