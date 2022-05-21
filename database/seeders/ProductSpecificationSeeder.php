<?php

namespace Database\Seeders;

use App\Models\ProductSpecification;
use Illuminate\Database\Seeder;

class ProductSpecificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductSpecification::factory(10)->create();
    }
}
