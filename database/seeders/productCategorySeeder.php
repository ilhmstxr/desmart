<?php

namespace Database\Seeders;

use App\Models\finances\product_categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class productCategorySeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Sayuran', 'Buah-buahan', 'Biji-bijian'];
        foreach ($categories as $category) {
            product_categories::factory()->create([
                'name' => $category,
                'slug' => Str::slug($category)
            ]);
        }
    }
}
