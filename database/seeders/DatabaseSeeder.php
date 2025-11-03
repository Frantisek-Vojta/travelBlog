<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        $admin = \App\Models\User::firstOrCreate(
            ['email' => 'admin@blog.com'],
            [
                'name' => 'Admin User',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ]
        );

        \App\Models\User::factory(5)->create();

        $this->call([
            CategorySeeder::class,
            TagSeeder::class,
            PostSeeder::class,
            CommentSeeder::class,
        ]);

        $this->command->info('Admin přihlašovací údaje:');
        $this->command->info('Email: admin@blog.com');
        $this->command->info('Heslo: password');
    }
}
