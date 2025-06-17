<?php

namespace Database\Seeders;

use App\Models\farms\Farm;
use App\Models\farms\Field;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class fieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $farms = Farm::all();

        if ($farms->isEmpty()) {
            $this->command->info('No farms found. Skipping FieldSeeder.');
            return;
        }
        foreach ($farms as $farm) {
            Field::factory(10)->create(['farm_id' => $farm->id]);
        }
    }
}
