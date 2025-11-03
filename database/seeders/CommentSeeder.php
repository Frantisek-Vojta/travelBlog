<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    public function run(): void
    {
        $czechComments = [
            'Skvělý článek, moc se mi líbí!',
            'Díky za tipy, určitě se tam chystám.',
            'Krásné fotografie, příroda je úchvatná.',
            'Byl jsem tam minulý rok a byl to nezapomenutelný zážitek.',
            'Doporučuji všem, kdo milují hory a přírodu.',
            'Skvěle napsáno, těším se na další články.',
            'Moc děkuji za inspiraci na další výlet.',
            'Paráda, přesně takové články jsem hledal.',
            'Krásně popsáno, cítím se tam být.',
            'Super tipy pro začátečníky, děkuji!',
        ];

        $posts = \App\Models\Post::all();
        $users = \App\Models\User::all();

        foreach ($posts as $post) {
            // Přidá 2-3 komentáře ke každému článku
            for ($i = 0; $i < rand(2, 3); $i++) {
                \App\Models\Comment::create([
                    'content' => $czechComments[array_rand($czechComments)],
                    'user_id' => $users->random()->id,
                    'post_id' => $post->id,
                    'created_at' => now()->subDays(rand(1, 30)),
                ]);
            }
        }
    }
}
