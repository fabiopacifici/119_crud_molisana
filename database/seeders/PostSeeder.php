<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = config('pasta.posts');

        foreach ($posts as $post) {
            $newPost = new Post();
            $newPost->title = $post['title'];
            $newPost->cover_image = $post['cover_image'];
            $newPost->body = $post['body'];
            $newPost->save();
        }
    }
}
