<?php

namespace Database\Seeders;

use App\Models\farms\plant_varieties;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class plantVarietiesSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        plant_varieties::factory()->create(['plant_name' => 'Padi', 'variety_name' => 'Ciherang']);
        plant_varieties::factory()->create(['plant_name' => 'Jagung', 'variety_name' => 'Bisi-18']);
        plant_varieties::factory()->create(['plant_name' => 'Cabai', 'variety_name' => 'Rawit Merah']);
    }
}
