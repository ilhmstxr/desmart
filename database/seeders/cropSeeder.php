<?php

namespace Database\Seeders;

use App\Models\farms\Crop;
use App\Models\farms\Field;
use App\Models\farms\growth_stages;
use App\Models\farms\plant_varieties;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class cropSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fields = Field::all();
        $varieties = plant_varieties::all();
        $stages = growth_stages::all();

        if ($fields->isNotEmpty() && $varieties->isNotEmpty() && $stages->isNotEmpty()) {
            Crop::factory(10)->create(function () use ($fields, $varieties, $stages) {
                return [
                    'field_id' => $fields->random()->id,
                    'plant_variety_id' => $varieties->random()->id,
                    'current_stage_id' => $stages->random()->id,
                ];
            });
        }
    }
}
