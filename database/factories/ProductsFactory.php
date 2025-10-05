<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Brand;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => fake()->imageUrl(),
            'name' => fake()->name(),
            'slug' => fake()->slug(),
            'visibility' => fake()->boolean(),
            'price'      => fake()->numberBetween(10, 100000),
            'sku'       => fake()->numberBetween(10, 1000),
            'compare_at_price' => fake()->numberBetween(10,200),
            'security_stock'    => fake()->numberBetween(100,1000),
            'cost_per_item' =>   fake()->numberBetween(100,10000),
            'barcode'       => fake()->word(),
            'quantity'      =>  fake()->numberBetween(10,1000),
            'can_return'    =>  fake()->boolean(),
            'can_ship'      => fake()->boolean(),
            'category_id'  => Category::factory(),
            'brand_id'      => Brand::factory(),
            'deleted_at'    => NULL,
        ];
    }
}
