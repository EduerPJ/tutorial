<?php

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create(['content' => 'Contenido del cuarto comentario', 'user_id' => 4, 'posts_id' => 4]);
        Comment::create(['content' => 'Contenido del quinto comentario', 'user_id' => 4, 'posts_id' => 4]);
    }
}
