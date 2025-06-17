<?php

namespace Database\Factories;

use App\Models\farms\Crop;
use App\Models\farms\Field;
use App\Models\Schedule;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\schedule>
 */
class scheduleFactory extends Factory
{
    protected $model = Schedule::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    private static $scheduleTemplates = [
        [
            'type' => 'planting',
            'title' => 'Penanaman Bibit Jagung di Blok A#',
            'description' => 'Jadwal untuk penanaman bibit jagung hibrida Bisi-18 di Blok A# seluas 1 hektar.',
            'priority' => 'high',
        ],
        [
            'type' => 'irrigation',
            'title' => 'Irigasi Pagi untuk Lahan Sawah Blok B#',
            'description' => 'Pengairan rutin untuk lahan sawah padi di Blok B#. Pastikan ketinggian air 3-5 cm.',
            'priority' => 'medium',
        ],
        [
            'type' => 'fertilizing',
            'title' => 'Pemupukan NPK untuk Tomat di Lahan C#',
            'description' => 'Jadwal pemupukan kedua menggunakan NPK Mutiara untuk tanaman tomat fase vegetatif.',
            'priority' => 'medium',
        ],
        [
            'type' => 'harvesting',
            'title' => 'Panen Parsial Cabai Rawit Merah',
            'description' => 'Pelaksanaan panen cabai rawit merah yang sudah matang. Siapkan 5 tenaga kerja.',
            'priority' => 'high',
        ],
        [
            'type' => 'maintenance',
            'title' => 'Perawatan Saluran Irigasi Utama',
            'description' => 'Pembersihan gulma dan sedimen dari saluran irigasi utama di sisi utara.',
            'priority' => 'low',
        ],
        [
            'type' => 'inspection',
            'title' => 'Inspeksi Hama Wereng pada Tanaman Padi',
            'description' => 'Pemeriksaan rutin mingguan untuk deteksi dini serangan hama wereng.',
            'priority' => 'urgent',
        ],
    ];
    public function definition(): array
    {
        $template = $this->faker->randomElement(self::$scheduleTemplates);

        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
            'type' => $this->faker->randomElement(['planting', 'irrigation', 'fertilizing', 'harvesting', 'maintenance', 'inspection']),
            'priority' => $this->faker->randomElement(['low', 'medium', 'high', 'urgent']),

            'scheduled_at' => $this->faker->dateTimeBetween('now', '+1 month'),
            'completed_at' => null,
            'status' => 'pending',
            'notes' => json_encode(['note' => $this->faker->sentence]),
            
            // akan diisi oleh seeder
            // 'assigned_to' => User::factory(),
            // 'created_by' => User::factory(),
            // 'crop_id' => Crop::factory(),
            // 'field_id' => Field::factory(),
        ];
    }
}
