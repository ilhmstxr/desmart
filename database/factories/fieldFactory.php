<?php

namespace Database\Factories;

use App\Models\Farm;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class fieldFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'farm_id' => Farm::factory(),
            'name' => $this->faker->word,
            'size' => $this->faker->randomFloat(2, 1, 100),
            'soil_type' => $this->faker->randomElement(['Loam', 'Clay', 'Sandy', 'Silt']),
            'ph_level' => $this->faker->randomFloat(1, 5.5, 7.5),
            'irrigation_status' => $this->faker->randomElement(['active', 'scheduled', 'off']),
            'last_tested' => $this->faker->date(),
            'altitude' => $this->faker->randomFloat(2, 100, 1000),
        ];
    }
}
