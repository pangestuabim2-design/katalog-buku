<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'isbn' => fake()->unique()->numerify('978##########'),
            'author' => fake()->name(),
            'publisher' => fake()->randomElement(['Gramedia', 'Bentang', 'Kampus']),
            'published_year' => fake()->numberBetween(2000, 2026),
            'description' => fake()->paragraph(),
            'price' => fake()->numberBetween(50000, 150000),
            'stock' => fake()->numberBetween(5, 50),
            'location' => fake()->randomElement(['Rak A1', 'Rak A2', 'Rak B1', 'Gudang']),
        ];
    }
}