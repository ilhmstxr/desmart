<?php

namespace Database\Seeders;

use App\Models\farms\growth_stages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class growthStagesSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        growth_stages::factory()->create(['stage_name' => 'Pembibitan']);
        growth_stages::factory()->create(['stage_name' => 'Pertumbuhan']);
        growth_stages::factory()->create(['stage_name' => 'Berbunga']);
        growth_stages::factory()->create(['stage_name' => 'Siap Panen']);
    }
}
