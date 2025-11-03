<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(): void
    {

        for ($i = 1; $i <= 8; $i++) {
            $post = \App\Models\Post::factory()->create();


            $tags = \App\Models\Tag::inRandomOrder()->limit(rand(2, 3))->pluck('id')->toArray();
            $post->tags()->attach($tags);
        }
    }
}
