<?php

namespace Database\Factories;

use App\Models\Crop;
use App\Models\Field;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\schedule>
 */
class scheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'assigned_to' => User::factory(),
            'created_by' => User::factory(),
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
            'type' => $this->faker->randomElement(['planting', 'irrigation', 'fertilizing', 'harvesting', 'maintenance', 'inspection']),
            'scheduled_at' => $this->faker->dateTimeBetween('now', '+1 month'),
            'status' => 'pending',
            'priority' => $this->faker->randomElement(['low', 'medium', 'high', 'urgent']),
            'crop_id' => Crop::factory(),
            'field_id' => Field::factory(),
            'notes' => json_encode(['note' => $this->faker->sentence]),
        ];
    }
}
