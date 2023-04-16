<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mentor>
 */
class PriceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            ['price' => 'Бесплатно'],
            ['price' => '1000'],
            ['price' => '2000'],
            ['price' => '3000'],
            ['price' => '4000'],
            ['price' => '5000'],
            ['price' => '6000'],
            ['price' => '7000'],
            ['price' => '8000'],
            ['price' => '9000'],
            ['price' => 'По договоренности'],
        ];
    }
}
