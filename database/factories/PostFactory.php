<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
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
    public function definition(): array
    {
        $excerptRaws = $this->faker->paragraphs(2);
        $bodyRaws = $this->faker->paragraphs(6);
        $excerptHtml = '';
        $bodyHtml = '';

        foreach ($excerptRaws as $excerpt) {
            $excerptHtml .= "<p>{$excerpt}</p>";
        }

        foreach ($bodyRaws as $body) {
            $bodyHtml .= "<p>{$body}</p>";
        }

        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'excerpt' => $excerptHtml,
            'body' => $bodyHtml,
        ];

//        return [
//            'user_id' => User::factory(),
//            'category_id' => Category::factory(),
//            'title' => $this->faker->sentence,
//            'slug' => $this->faker->slug,
//            'excerpt' => '<p>' . implode('</p><p>', $this->faker->paragraphs(2)) . '</p>',
//            'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(6)) . '</p>',
//        ];
    }
}
