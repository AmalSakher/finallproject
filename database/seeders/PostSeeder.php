<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'First Post',
            'content' => 'This is the content of the first post.',
        ]);

        Post::create([
            'title' => 'Second Post',
            'content' => 'This is the content of the second post.',
        ]);

        // Add more posts as needed
        $this->call([
            PostSeeder::class,
            // Add other seeders if needed
        ]);
    }

    }

