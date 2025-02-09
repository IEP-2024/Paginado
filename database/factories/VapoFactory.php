<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VapoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'marca' => $this->faker->word(),
            'modelo' => $this->faker->word(),
            'color' => $this->faker->colorName()
        ];
    }
}
