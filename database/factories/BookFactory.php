<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(random_int(1, 3)),
            'cover' => 'https://fastly.picsum.photos/id/500/400/600.jpg?hmac=3aHLAXAH1QTrKDX6r0opo4SmXyCDgizSbCbSgFjnrew',
            'price' => fake()->numberBetween(30, 100),
            'description' => fake()->paragraph,
        ];
    }
}
