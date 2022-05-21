<?php

namespace Database\Factories;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
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
            'price'=>34.35,
            'description' => $this->faker->paragraph(),
            'category_id' => Categories::factory(1)->create()->first(),
            'image' => 'https://france-export-fv-online.com/3484-home_default/sauce-heinz-tomato-ketchup-bio.jpg',
        ];
    }
}
