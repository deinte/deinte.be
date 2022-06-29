<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'text' => $this->faker->paragraphs(5, true),
            'author' => "Dante Schrauwen",
        ];
    }

    public function published(): self
    {
        return $this->state(function () {
            return [
                'published' => true,
            ];
        });
    }

    public function unpublished(): self
    {
        return $this->state(function () {
            return [
                'published' => false,
            ];
        });
    }
}
