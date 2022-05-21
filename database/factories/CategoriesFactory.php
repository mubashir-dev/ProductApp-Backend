<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->name(),
            'description' => $this->faker->paragraph(),
            'image' => 'https://france-export-fv-online.com/3484-home_default/sauce-heinz-tomato-ketchup-bio.jpg',
        ];
    }
}
