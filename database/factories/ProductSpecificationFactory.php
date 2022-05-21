<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductSpecificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'case_diameter' => 'Diameter:20 cm Length:40cm',
            'origin' => 'Germany',
            'production_method' => '100 % Handmade',
            'material' => 'Gold and Crafting',
            'strap_color' => 'Gold Color',
            'product_id' => Product::factory(1)->create()->first()
        ];
    }
}
