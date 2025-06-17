<?php

namespace Database\Seeders;

use App\Models\finances\marketplaces;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class marketplacesSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        marketplaces::factory()->create(['name' => 'Pasar Lokal']);
        marketplaces::factory()->create(['name' => 'Toko Online']);
        marketplaces::factory()->create(['name' => 'Supermarket']);
    }
}
