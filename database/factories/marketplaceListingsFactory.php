<?php

namespace Database\Factories;

use App\Models\finances\MarketplaceListing;
use App\Models\finances\marketplaces;
use App\Models\finances\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class marketplaceListingsFactory extends Factory
{
    protected $model = MarketplaceListing::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => Product::factory(),
            'marketplace_id' => marketplaces::factory(),
            'marketplace_name' => $this->faker->company,
            'listing_price' => $this->faker->randomFloat(2, 5, 200),
            'quantity_listed' => $this->faker->numberBetween(10, 500),
            'status' => 'active',
            'expiry_date' => $this->faker->dateTimeBetween('+1 month', '+6 months'),
            'listing_notes' => $this->faker->sentence,
            'commission_rate' => $this->faker->randomFloat(2, 1, 15),
            'listed_date' => now(),
        ];
    }
}
