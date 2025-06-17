<?php

namespace Database\Seeders;

use App\Models\finances\MarketplaceListing;
use App\Models\finances\marketplaces;
use App\Models\finances\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class marketplaceListingsSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */

     public function run(): void
    {
        $products = Product::all();
        $marketplaces = marketplaces::all();

        if ($products->isEmpty() || $marketplaces->isEmpty()) {
            $this->command->info('Tidak dapat membuat listing karena data produk atau marketplace tidak ditemukan.');
            return;
        }

        // Buat satu listing untuk setiap produk di setiap marketplace
        foreach ($products as $product) {
            foreach ($marketplaces as $marketplace) {
                MarketplaceListing::factory()->create([
                    'product_id' => $product->id,
                    'marketplace_id' => $marketplace->id,
                    'marketplace_name' => $marketplace->name, // Ambil nama dari relasi
                ]);
            }
        }
    }
}
