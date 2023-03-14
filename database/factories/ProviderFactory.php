<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Provider>
 */
class ProviderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $response = json_decode(file_get_contents('https://dog.ceo/api/breeds/image/random'));
       
        return [
            'name' => fake()->name(),
            'url' =>  'https://dog.ceo/api/breeds/image/random'
        ];
    }
}

