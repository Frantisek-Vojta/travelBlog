<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    public function run(): void
    {
        $tags = [
            'turistika', 'hory', 'příroda', 'dobrodružství',
            'jezera', 'fjordy', 'lyžování', 'camping',
            'fotografie', 'zážitky', 'kultura', 'tradice'
        ];

        foreach ($tags as $tag) {
            \App\Models\Tag::create([
                'name' => $tag,
                'slug' => $tag
            ]);
        }
    }
}
