<?php

namespace Database\Seeders;

use App\Models\farms\Crop;
use App\Models\Schedule;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class scheduleSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $workers = User::where('role', 'worker')->get();
        $creators = User::whereIn('role', ['admin', 'manager'])->get();
        $crops = Crop::with('field')->get();

        if ($workers->isEmpty() || $creators->isEmpty() || $crops->isEmpty()) {
            $this->command->info('Tidak dapat membuat jadwal karena data pekerja, pembuat (admin/manager), atau tanaman tidak ditemukan.');
            return;
        }

        $scheduling = 25;


        for ($i = 0; $i < $scheduling; $i++) {
            $crop = $crops->random();
            Schedule::factory()->create([
                'assigned_to' => $workers->random()->id,
                'created_by' => $creators->random()->id,
                'crop_id' => $crop->id,
                'field_id' => $crop->field_id, // Ambil field_id dari relasi crop
            ]);
        }
    }
}
