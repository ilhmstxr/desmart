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
        $manager = User::where('role', 'managefr')->first();
        if ($manager) {
            Farm::factory(5)->create(['owner_id' => $manager->id]);
        }else{
            $this->command->info('Tidak dapat membuat data farm karena pengguna manager tidak ditemukan.');
        }
    }
}
