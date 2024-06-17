<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'id' => 1,
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password')
        ]);
        BlogPost::factory()->create([
           'user_id' => 1,
           'blog_category_id' => 1,
            'blog_tag_id' => 1,
            'blog_title' => 'Test Title',
            'blog_body' => 'Test Body',
            'blog_description' => 'Test Description',
            'blog_image' => 'test.jpg',
            'blog_published' => true,
            'blog_published_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => now()
        ]);
    }
}
