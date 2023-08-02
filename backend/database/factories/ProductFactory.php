<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array{
        $name      = fake()->name();
        $slug      = Str::slug($name);
        $imagesStr = '';
        for ($i = 0; $i < 3; $i++) {
            $imagesStr .= 'digital_' . random_int(1, 22) . '.jpg' . ',';
        }
        return [
            'name'           => $name,
            'slug'            => $slug,
            'sku'             => $name . random_int(1, 50),
            'description'     => fake()->text(500),
            'stock_status'    => random_int(0, 1),
            'qty_in_stock'    => fake()->numberBetween(10, 100),
            'sale_price'      => fake()->numberBetween(200, 1000),
            'original_price'  => fake()->numberBetween(200, 500),
            'image'           => 'digital_' . random_int(1, 35) . '.jpg',
            'gallery'         => $imagesStr,
            'category_id'     => fake()->numberBetween(1, 3),
            'sub_category_id' => fake()->numberBetween(1, 9),
            'brand_id'        => fake()->numberBetween(1, 5),
        ];
    }
}