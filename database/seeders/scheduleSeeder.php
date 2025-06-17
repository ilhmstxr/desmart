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
        $users = User::where('role', 'worker')->get();
        $creators = User::whereIn('role', ['admin', 'manager'])->get();
        $crops = Crop::all();

        if ($users->isEmpty() || $creators->isEmpty() || $crops->isEmpty()) {
            $this->command->info('Tidak dapat membuat jadwal karena data pekerja, pembuat (admin/manager), atau tanaman tidak ditemukan.');
            return;
        }

        Schedule::factory(15)->create(function () use ($users, $creators, $crops) {
            $crop = $crops->random();
            return [
                'assigned_to' => $users->random()->id,
                'created_by' => $creators->random()->id,
                'crop_id' => $crop->id,
                'field_id' => $crop->field_id, // Ambil field_id dari relasi crop
            ];
        });
    }
}
