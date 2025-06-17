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
        $price = $this->faker->randomElement([15000, 25000, 30000, 50000, 75000]);
        $total = $quantity * $price;
        $commission = $total * ($this->faker->randomFloat(2, 1, 15) / 100);

        return [
            'customer_name' => $this->faker->name,
            'customer_email' => $this->faker->unique()->safeEmail,
            'customer_phone' => $this->faker->phoneNumber,

            'quantity_sold' => $quantity,
            'unit_price' => $price,
            'total_amount' => $total,
            'commission_amount' => $commission,
            'net_amount' => $total - $commission,

            'payment_status' => $this->faker->randomElement(['paid', 'pending', 'refunded']),
            'sale_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'delivery_status' => $this->faker->randomElement(['pending', 'shipped', 'delivered', 'cancelled']),
            'notes' => $this->faker->randomElement(['Tolong packing yang aman.', null, 'Kirim secepatnya.', 'Diterima oleh satpam.']),

            // yang ini?
            // 'marketplace_listing_id' => MarketplaceListing::factory(),
            // 'product_id' => Product::factory(),
            // 'created_by' => User::factory(),
            // 'sale_number' => $this->faker->unique()->uuid,
            // 'processed_by_user_id' => User::factory(),
        ];
    }
}
