<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductCategory>
 */
class ProductCategoryFactory extends Factory
{
    protected $model = \App\Models\ProductCategory::class;

    public function definition()
    {
        return [
            'product_id' => \App\Models\Product::factory(),
            'category_id' => \App\Models\Category::factory(),
        ];
    }
}
