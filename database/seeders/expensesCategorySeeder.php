<?php

namespace Database\Seeders;

use App\Models\finances\expenses_category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class expensesCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        expenses_category::factory()->create(['name' => 'Pupuk']);
        expenses_category::factory()->create(['name' => 'Bibit']);
        expenses_category::factory()->create(['name' => 'Pestisida']);
        expenses_category::factory()->create(['name' => 'Operasional']);
    }
}
