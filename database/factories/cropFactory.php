<?php

namespace Database\Factories;

use App\Models\Field;
use App\Models\growth_stages;
use App\Models\plant_varieties;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class cropFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'field_id' => Field::factory(),
            'name' => $this->faker->word,
            'plant_variety_id' => plant_varieties::factory(),
            'current_stage_id' => growth_stages::factory(),
            'area' => $this->faker->randomFloat(2, 1, 50),
            'planted_date' => $this->faker->date(),
            'expected_harvest_date' => $this->faker->dateTimeBetween('+3 months', '+6 months'),
        ];
    }
}
