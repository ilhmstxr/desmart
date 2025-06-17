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
        foreach ($farms as $farm) {
            Field::factory(4)->create(['farm_id' => $farm->id]);
        }
    }
}
