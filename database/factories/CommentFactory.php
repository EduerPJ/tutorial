<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\User;
use App\Models\Post;

$factory->define(App\Models\Comment::class, function (Faker $faker) {
    $count_users = User::count();
    $count_posts = Post::count();

    return [
        'content' => $faker->text($maxNbChars = 50),
        'user_id' => $faker->numberBetween(1, $count_users),
        'post_id' => $faker->numberBetween(1, $count_posts)
    ];
});
