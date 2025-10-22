<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $content = $this->faker->paragraphs(rand(3, 7), true);
        
        return [
            'title' => $this->faker->sentence(rand(4, 8)),
            'content' => $content,
            'excerpt' => substr($content, 0, 100) . (strlen($content) > 100 ? '...' : ''),
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'created_at' => $this->faker->dateTimeBetween('-6 months', 'now'),
            'updated_at' => function (array $attributes) {
                return $this->faker->dateTimeBetween($attributes['created_at'], 'now');
            },
        ];
    }

    /**
     * Define a state for posts without a category.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function uncategorized(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'category_id' => null,
            ];
        });
    }

    /**
     * Define a state for posts with a specific user.
     *
     * @param User $user
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function byUser(User $user): Factory
    {
        return $this->state(function (array $attributes) use ($user) {
            return [
                'user_id' => $user->id,
            ];
        });
    }

    /**
     * Define a state for posts with a specific category.
     *
     * @param Category $category
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function inCategory(Category $category): Factory
    {
        return $this->state(function (array $attributes) use ($category) {
            return [
                'category_id' => $category->id,
            ];
        });
    }
}