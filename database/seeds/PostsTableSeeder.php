<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create(['title' => 'Este es el quinto post', 'content' => 'Contenido del quinto post', 'user_id' => 4]);
        Post::create(['title' => 'Este es el sexto post', 'content' => 'Contenido del sexto post', 'user_id' => 4]);
    }
}
