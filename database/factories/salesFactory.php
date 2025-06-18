<?php

namespace Database\Factories;

use App\Models\finances\Sale;
use App\Models\finances\MarketplaceListing;
use App\Models\finances\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


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
        // 1. Buat dulu listing produk. Ini sudah benar karena Sale bergantung pada Listing.
        // Factory ini secara otomatis akan membuat Product juga karena didefinisikan di dalam MarketplaceListingFactory (asumsi).
        $listing = MarketplaceListing::factory()->create();

        // 2. Tentukan kuantitas yang terjual, tidak boleh lebih dari yang terdaftar.
        $quantity = $this->faker->numberBetween(1, $listing->quantity_listed);
        $price = $listing->listing_price; // Gunakan harga dari listing agar konsisten
        $total = $quantity * $price;
        $commission = $total * ($listing->commission_rate / 100);

        return [
            // Kolom dari skema database Anda:
            'marketplace_listing_id' => $listing->id,
            'sale_number' => 'SALE-' . now()->format('Ymd') . '-' . strtoupper(Str::random(6)), // DI-AKTIFKAN & DIPERBAIKI
            'customer_name' => $this->faker->name,
            'customer_email' => $this->faker->unique()->safeEmail,
            'customer_phone' => $this->faker->phoneNumber,
            
            'quantity_sold' => $quantity,
            'unit_price' => $price,
            'total_amount' => $total,
            'net_amount' => $total - $commission,

            'payment_status' => $this->faker->randomElement(['pending', 'paid', 'refunded']),
            'sale_date' => $this->faker->dateTimeBetween($listing->created_at, 'now'),
            'delivery_date' => null, // Biarkan null, bisa diisi nanti
            'notes' => $this->faker->randomElement(['Tolong packing yang aman.', null, 'Kirim secepatnya.', 'Diterima oleh satpam.']),
            'created_by' => User::factory(), // DI-AKTIFKAN
            'commission_amount' => $commission,

            'delivery_status' => 'pending', // Default status awal
            'processed_by_user_id' => User::factory(), // DI-AKTIFKAN

            // DIHAPUS: Kolom 'product_id' tidak ada di tabel 'sales'
            // 'product_id' => Product::factory(),
        ];
    }
}
