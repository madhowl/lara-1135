<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition(): array
    {
        $title = fake()->realTextBetween(20,75);
        $slug = Str::slug($title, '-');
        return [
            'title'=>$title,
            'slug' => $slug,
            'category_id'=>rand(1,10),
            'description'=>fake()->realText(250),
            'active'=>1,
            'image'=>fake()->imageUrl(640,480,'cats'),
            'content'=>fake()->realText(),
        ];
    }
}
