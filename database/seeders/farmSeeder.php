<?php

namespace Database\Seeders;

use App\Models\farms\Farm;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class farmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $manager = User::where('role', 'manager')->first();
        if ($manager) {
            Farm::factory(2)->create(['owner_id' => $manager->id]);
        }
    }
}
