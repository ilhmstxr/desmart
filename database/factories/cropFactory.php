<?php

namespace Database\Factories;

use App\Models\farms\Crop;
use App\Models\farms\Field;
use App\Models\farms\growth_stages;
use App\Models\farms\plant_varieties;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class cropFactory extends Factory
{
    protected $model = Crop::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    private static $plantData = [
        'Padi' => ['Ciherang', 'IR64', 'Mekongga'],
        'Jagung' => ['Bisi-18', 'Pioneer 27', 'NK212'],
        'Tomat' => ['Servo F1', 'Roma', 'Cherry'],
        'Cabai' => ['Rawit', 'Keriting', 'Besar'],
        'Bawang Merah' => ['Bima Brebes', 'Pikatan'],
        'Timun' => ['Hercules', 'Tornado'],
    ];

    public function definition(): array
    {
        $plantName = $this->faker->randomElement(array_keys(self::$plantData));

        $varietyName = $this->faker->randomElement(self::$plantData[$plantName]);

        $plantVariety = plant_varieties::firstOrCreate(
            [
                'plant_name' => $plantName,
                'variety_name' => $varietyName
            ],
            ['description' => "Varitas $varietyName dari tanaman $plantName"]
        );

        return [
            'field_id' => Field::factory(),
            'name' => $plantName,
            'plant_variety_id' => $plantVariety->id,
            'current_stage_id' => growth_stages::factory(),
            'area' => $this->faker->randomFloat(2, 1, 50),
            'planted_date' => $this->faker->date(),
            'expected_harvest_date' => $this->faker->dateTimeBetween('+3 months', '+6 months'),
        ];
    }
}
