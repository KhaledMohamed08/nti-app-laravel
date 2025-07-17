<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            [
                'title' => 'article 1',
                'content' => 'content of article 1',
                'user_id' => 1,
            ],
            [
                'title' => 'article 2',
                'content' => 'content of article 2',
                'user_id' => 1,
            ],
            [
                'title' => 'article 3',
                'content' => 'content of article 3',
                'user_id' => 1,
            ],
            [
                'title' => 'article 4',
                'content' => 'content of article 4',
                'user_id' => 2,
            ],
            [
                'title' => 'article 5',
                'content' => 'content of article 5',
                'user_id' => 2,
            ],

        ];

        foreach ($articles as $article) {
            Article::create($article);
        }
    }
}
