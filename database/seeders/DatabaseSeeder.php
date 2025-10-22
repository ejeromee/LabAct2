<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // // Create or find admin user
        // $admin = User::firstOrCreate(
        //     ['email' => 'admin@example.com'],
        //     [
        //         'name' => 'Admin User',
        //         'password' => bcrypt('password'),
        //         'email_verified_at' => now(),
        //     ]
        // );
        
        // // Create or find regular user
        // $user = User::firstOrCreate(
        //     ['email' => 'test@example.com'],
        //     [
        //         'name' => 'Test User',
        //         'password' => bcrypt('password'),
        //         'email_verified_at' => now(),
        //     ]
        // );
        
        // // Create some additional users - only if we have fewer than 5 users total
        // $userCount = User::count();
        // if ($userCount < 5) {
        //     $additionalUsers = User::factory()->count(5 - $userCount)->create();
        // } else {
        //     $additionalUsers = User::where('email', '!=', 'admin@example.com')
        //         ->where('email', '!=', 'test@example.com')
        //         ->limit(3)
        //         ->get();
        // }
        
        // // Delete existing categories and create new ones
        // DB::statement('SET FOREIGN_KEY_CHECKS=0');
        // Category::truncate();
        // DB::statement('SET FOREIGN_KEY_CHECKS=1');
        
        // // Create 5 categories
        // $categories = Category::factory()->count(5)->create();
        
        // // Get all categories
        // $categories = Category::all();
        
        // // Array of all users
        // $allUsers = [$admin, $user];
        // if (isset($additionalUsers) && $additionalUsers->count() > 0) {
        //     $allUsers = array_merge($allUsers, $additionalUsers->all());
        // }
        
        // // Delete existing posts if any (since we want exactly 100)
        // // Using query builder with disable/enable foreign keys to avoid constraint issues
        // DB::statement('SET FOREIGN_KEY_CHECKS=0');
        // Post::truncate();
        // DB::statement('SET FOREIGN_KEY_CHECKS=1');
        
        // // We want exactly 100 posts
        // $targetPostCount = 100;
        
        // // Get the total number of users
        // $totalUsers = count($allUsers);
        
        // // Calculate posts per user to reach target post count
        // // We'll distribute posts evenly among users
        // $postsPerUser = ceil($targetPostCount / $totalUsers);
        
        // // Track total posts created
        // $totalPostsCreated = 0;
        
        // foreach ($allUsers as $author) {
        //     // Calculate how many posts this user should get
        //     $postsToCreate = min($postsPerUser, $targetPostCount - $totalPostsCreated);
        //     if ($postsToCreate <= 0) break;
            
        //     // Calculate categorized vs uncategorized posts
        //     $categorizedPosts = ceil($postsToCreate * 0.8); // 80% categorized
        //     $uncategorizedPosts = $postsToCreate - $categorizedPosts;
            
        //     // Create categorized posts
        //     foreach ($categories as $category) {
        //         if ($categorizedPosts <= 0) break;
                
        //         // Calculate posts for this category
        //         $postsForCategory = ceil($categorizedPosts / count($categories));
        //         $postsForCategory = min($postsForCategory, $categorizedPosts);
                
        //         // Make sure we don't exceed target post count
        //         if ($totalPostsCreated + $postsForCategory > $targetPostCount) {
        //             $postsForCategory = $targetPostCount - $totalPostsCreated;
        //         }
                
        //         if ($postsForCategory <= 0) break;
                
        //         // Create posts for this category
        //         Post::factory()
        //             ->count($postsForCategory)
        //             ->byUser($author)
        //             ->inCategory($category)
        //             ->create();
                
        //         $categorizedPosts -= $postsForCategory;
        //         $totalPostsCreated += $postsForCategory;
                
        //         if ($totalPostsCreated >= $targetPostCount) break;
        //     }
            
        //     // Create uncategorized posts
        //     if ($uncategorizedPosts > 0 && $totalPostsCreated < $targetPostCount) {
        //         // Adjust if we're close to target count
        //         $uncategorizedPosts = min($uncategorizedPosts, $targetPostCount - $totalPostsCreated);
                
        //         Post::factory()
        //             ->count($uncategorizedPosts)
        //             ->byUser($author)
        //             ->uncategorized()
        //             ->create();
                
        //         $totalPostsCreated += $uncategorizedPosts;
        //     }
            
        //     if ($totalPostsCreated >= $targetPostCount) break;
        // }
        
        // // Final check - if we still don't have 100 posts, create the remaining ones
        // $finalCount = Post::count();
        // if ($finalCount < $targetPostCount) {
        //     // Create the remaining posts with the admin user
        //     Post::factory()
        //         ->count($targetPostCount - $finalCount)
        //         ->byUser($admin)
        //         ->create();
        // }
    }
}
