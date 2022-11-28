<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        $title = $this->faker->words(nb: 5, asText: true);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'body' => $this->faker->randomHtml,
            'description' => $this->faker->sentences(nb: 2, asText: true),
            'published' => $this->faker->boolean
        ];
    }
}
