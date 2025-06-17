<?php

namespace Database\Factories;

use App\Models\farms\Crop;
use App\Models\finances\Product;
use App\Models\finances\product_categories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class productFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_category_id' => product_categories::factory(),
            'name' => $this->faker->word,
            'sku' => $this->faker->unique()->ean8,
            'price_per_unit' => $this->faker->randomFloat(2, 1, 100),
            'unit_type' => $this->faker->randomElement(['kg', 'pcs', 'box', 'bunch']),
            'stock_quantity' => $this->faker->numberBetween(10, 200),
            'minimum_stock' => 10,
            'status' => 'active',
            'description' => $this->faker->paragraph,
            'cost_per_unit' => $this->faker->randomFloat(2, 0.5, 50),
            'crop_id' => Crop::factory(),
            'created_by_user_id' => User::factory(),
        ];
    }
}
