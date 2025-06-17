<?php

namespace Database\Factories;

use App\Models\farms\Farm;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class farmFactory extends Factory
{
    protected $model = Farm::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    private static $farmData = [
        [
            'name' => 'Sinar Tani Sejahtera',
            'location' => 'Bogor, Jawa Barat',
            'description' => 'Fokus pada pertanian sayuran hidroponik dan organik.'
        ],
        [
            'name' => 'Mitra Tani Lestari',
            'location' => 'Lembang, Jawa Barat',
            'description' => 'Pertanian bunga potong dan sayuran dataran tinggi.'
        ],
        [
            'name' => 'Sumber Rejeki Farm',
            'location' => 'Malang, Jawa Timur',
            'description' => 'Spesialisasi pada budidaya apel dan buah-buahan subtropis.'
        ],
        [
            'name' => 'Agro Tani Mandiri',
            'location' => 'Sleman, Yogyakarta',
            'description' => 'Pertanian padi organik dengan sistem irigasi modern.'
        ],
        [
            'name' => 'Bukit Hijau Farm',
            'location' => 'Bedugul, Bali',
            'description' => 'Perkebunan kopi arabika dan stroberi dengan konsep agrowisata.'
        ],
    ];


    public function definition(): array
    {

        $farmInfo = $this->faker->randomElement(self::$farmData);

        return [
            'owner_id' => User::factory(),
            'name' => $farmInfo['name'],
            'location' => $farmInfo['location'],
            'description' => $farmInfo['description'],
            'total_area' => $this->faker->randomFloat(2, 10, 1000),
            'status' => $this->faker->randomElement(['active', 'inactive', 'archived']),
            'farm_photo_path' => null,
        ];
    }
}
