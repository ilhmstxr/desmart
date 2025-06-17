<?php

namespace Database\Seeders;

use App\Models\farms\Crop;
use App\Models\finances\Product;
use App\Models\finances\product_categories;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class productSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = product_categories::all();
        $crops = Crop::all();
        $users = User::all();

        // Pastikan data relasi ada sebelum melanjutkan
        if ($categories->isEmpty() || $crops->isEmpty() || $users->isEmpty()) {
            $this->command->info('Tidak dapat membuat data produk karena data kategori, tanaman (crop), atau pengguna tidak ditemukan.');
            return;
        }

        Product::factory(20)->create(function () use ($categories, $crops, $users) {
            return [
                'product_category_id' => $categories->random()->id,
                'crop_id' => $crops->random()->id,
                'created_by_user_id' => $users->random()->id,
            ];
        });
    }
}
