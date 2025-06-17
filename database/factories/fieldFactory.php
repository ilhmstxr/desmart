<?php

namespace Database\Factories;

use App\Models\farms\Farm;
use App\Models\farms\Field;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class fieldFactory extends Factory
{

    protected $model = Field::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    private static $fieldData = [
        ['name' => 'Blok A1', 'soil_type' => 'Latosol'],
        ['name' => 'Petak Sawah Utara', 'soil_type' => 'Andosol'],
        ['name' => 'Kebun Barat', 'soil_type' => 'Grumusol'],
        ['name' => 'Area Terasering', 'soil_type' => 'Regosol'],
        ['name' => 'Lahan Uji Coba', 'soil_type' => 'Podsolik Merah Kuning'],
        ['name' => 'Blok Cempedak', 'soil_type' => 'Aluvial'],
    ];
    public function definition(): array
    {
        $fieldInfo = $this->faker->randomElement(self::$fieldData);
        return [
            'farm_id' => Farm::factory(),
            'name' => $fieldInfo['name'],
            'size' => $this->faker->randomFloat(2, 1, 100),
            'soil_type' => $fieldInfo['soil_type'],
            'ph_level' => $this->faker->randomFloat(1, 5.5, 7.2),
            'irrigation_status' => $this->faker->randomElement(['active', 'scheduled', 'off']),
            'last_tested' => $this->faker->date(),
            'altitude' => $this->faker->randomFloat(2, 100, 1000),
        ];
    }
}
