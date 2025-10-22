<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $users = User::all();
        $categories = Category::all();

        if ($users->count() === 0 || $categories->count() === 0) {
            $this->command->error('No users or categories found. Please seed users and categories first.');
            return;
        }
        
        $count = 100; 
        for ($i = 0; $i < $count; $i++) {
            $postData = [
                'title' => fake()->sentence(rand(4, 8)),
                'content' => $content = fake()->paragraphs(rand(3, 7), true),
                'excerpt' => substr($content, 0, 100) . (strlen($content) > 100 ? '...' : ''),
                'user_id' => $users->random()->id,
                'category_id' => $categories->random()->id,
                'created_at' => now()->subDays(rand(1, 180)),
                'updated_at' => now(),
            ];
            
            Post::create($postData);
        }

        $this->command->info("posts seeded successfully!");
    }
}
