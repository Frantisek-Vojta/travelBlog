<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Finsko', 'slug' => 'finsko'],
            ['name' => 'Švédsko', 'slug' => 'svedsko'],
            ['name' => 'Švýcarsko', 'slug' => 'svycarsko'],
            ['name' => 'Alpy', 'slug' => 'alpy'],
            ['name' => 'Tatry', 'slug' => 'tatry'],
            ['name' => 'Horské túry', 'slug' => 'horske-tury'],
            ['name' => 'Norsko', 'slug' => 'norsko'],
            ['name' => 'Rakousko', 'slug' => 'rakousko'],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
