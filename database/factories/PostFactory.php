<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Post::class;

    public function definition(): array
    {
        return [
            // 'user_id' => fake()->numberBetween(1, 10),
            'user_id' => User::factory(),
            // 'category_id' => fake()->numberBetween(1, 10),
            'category_id' => Category::factory(),
            'title' => fake()->sentence(rand(1, 2), false),
            'content' => fake()->text(),
            'slug' => Str::slug(fake()->sentence()),
            'img' => 'https://placehold.co/600x400@2x.png'
        ];
    }
}
