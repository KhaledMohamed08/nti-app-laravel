<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Post::create([
        //     'title' => 'post 1',
        //     'content' => 'content of post 1',
        // ]);

        $posts = [
            [
                'title' => 'post 1',
                'content' => 'content of post 1'
            ],
            [
                'title' => 'post 2',
                'content' => 'content of post 2'
            ],
            [
                'title' => 'post 3',
                'content' => 'content of post 3'
            ],
            [
                'title' => 'post 4',
                'content' => 'content of post 4'
            ],
            [
                'title' => 'post 5',
                'content' => 'content of post 5'
            ],
            [
                'title' => 'post 6',
                'content' => 'content of post 6'
            ],
            [
                'title' => 'post 7',
                'content' => 'content of post 7'
            ],
            [
                'title' => 'post 8',
                'content' => 'content of post 8'
            ],
            [
                'title' => 'post 9',
                'content' => 'content of post 9'
            ],
            [
                'title' => 'post 10',
                'content' => 'content of post 10'
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
