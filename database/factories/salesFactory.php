<?php

namespace Database\Factories;

use App\Models\finances\Sale;
use App\Models\finances\MarketplaceListing;
use App\Models\finances\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class salesFactory extends Factory
{
    protected $model = Sale::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $quantity = $this->faker->numberBetween(1, 10);
        $price = $this->faker->randomFloat(2, 5, 200);
        $total = $quantity * $price;
        $commission = $total * ($this->faker->randomFloat(2, 1, 15) / 100);

        return [
            'marketplace_listing_id' => MarketplaceListing::factory(),
            'sale_number' => $this->faker->unique()->uuid,
            'product_id' => Product::factory(),
            'customer_name' => $this->faker->name,
            'customer_email' => $this->faker->safeEmail,
            'customer_phone' => $this->faker->phoneNumber,
            'quantity_sold' => $quantity,
            'unit_price' => $price,
            'total_amount' => $total,
            'commission_amount' => $commission,
            'net_amount' => $total - $commission,
            'payment_status' => 'paid',
            'sale_date' => $this->faker->date(),
            'delivery_status' => 'pending',
            'notes' => $this->faker->sentence,
            'created_by' => User::factory(),
            'processed_by_user_id' => User::factory(),
        ];
    }
}
