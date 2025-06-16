<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class growthStagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'stage_name' => $this->faker->randomElement(['Germination', 'Vegetative', 'Flowering', 'Fruiting', 'Harvest']),
            'description' => $this->faker->sentence,
        ];
    }
}
