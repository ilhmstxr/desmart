<?php

namespace Database\Seeders;

use App\Models\finances\MarketplaceListing;
use App\Models\finances\Sale;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class salesSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listings = MarketplaceListing::all();
        $users = User::all();

        if ($listings->isEmpty() || $users->isEmpty()) {
            $this->command->info('Tidak dapat membuat data penjualan karena data listing atau pengguna tidak ditemukan.');
            return;
        }

        $seedingSales = 50;

        for ($i = 0; $i < $seedingSales; $i++) {
            $listing = $listings->random();
            $user = $users->random();
            sale::factory()->create([
                'marketplace_listing_id' => $listing->id,
                'product_id' => $listing->product_id, // Ambil product_id dari listing
                'created_by' => $user->id,
                'processed_by_user_id' => $user->id,
            ]);
        };
    }
}
