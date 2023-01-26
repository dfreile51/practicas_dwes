<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Disco>
 */
class DiscoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->unique()->text(50),
            'autor' => $this->faker->text(10),
            'genero' => $this->faker->text(10),
            'año' => $this->faker->numberBetween(1900, 2023),
            /* 'imagen'=>$this->faker->imageUrl(120, 120, 'disco', true), */
        ];
    }
}
