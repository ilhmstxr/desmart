<?php

namespace Database\Factories;

use App\Models\farms\growth_stages;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class growthStagesFactory extends Factory
{
    protected $model = growth_stages::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    private static $growthStages = [
        ['stage_name' => 'Fase Bibit (Seedling)', 'description' => 'Tahap awal setelah perkecambahan, di mana tanaman masih sangat muda dan rentan.'],
        ['stage_name' => 'Fase Vegetatif', 'description' => 'Tahap pertumbuhan aktif akar, batang, dan daun. Tanaman fokus pada penguatan struktur.'],
        ['stage_name' => 'Fase Generatif (Berbunga)', 'description' => 'Tahap di mana tanaman mulai menghasilkan bunga sebagai persiapan untuk pembuahan.'],
        ['stage_name' => 'Fase Pembentukan Buah', 'description' => 'Tahap setelah penyerbukan bunga, di mana buah mulai terbentuk dan berkembang.'],
        ['stage_name' => 'Fase Pematangan & Panen', 'description' => 'Tahap akhir di mana buah matang sempurna dan siap untuk dipanen.'],
        ['stage_name' => 'Pasca-Panen', 'description' => 'Periode setelah panen, di mana lahan dibersihkan dan disiapkan untuk siklus tanam berikutnya.'],

    ];
    public function definition(): array
    {
        $stageInfo = $this->faker->randomElement(self::$growthStages);
        return [
            'stage_name' => $stageInfo['stage_name'],
            'description' => $stageInfo['description'],
        ];
    }
}
