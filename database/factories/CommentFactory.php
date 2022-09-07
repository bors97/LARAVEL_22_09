<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => null,
            'post_id' => null,
            'content' => fake()->paragraph(),
        ];
    }
    public function user(int $id)
    {
        return $this->state(fn (array $attributes) => [
                'user_id' => $id,
            ]);
    }
    public function post(int $id)
    {
        return $this->state(fn (array $attributes) => [
                'post_id' => $id,
            ]);
    }
}
