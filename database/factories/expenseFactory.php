<?php

namespace Database\Factories;

use App\Models\farms\Crop;
use App\Models\Expense;
use App\Models\finances\expenses_category;
use App\Models\farms\Field;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class expenseFactory extends Factory
{
    protected $model = Expense::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'created_by' => User::factory(),
            'crop_id' => Crop::factory(),
            'field_id' => Field::factory(),
            'expenses_category_id' => expenses_category::factory(),
            'description' => $this->faker->paragraph,
            'vendor_name' => $this->faker->company,
            'expense_date' => $this->faker->date(),
            'expense_number' => $this->faker->unique()->uuid,
            'amount' => $this->faker->randomFloat(2, 10, 1000),
            'payment_method' => $this->faker->randomElement(['cash', 'bank_transfer', 'check', 'credit_card']),
            'status' => 'paid',
            'notes' => $this->faker->sentence,
        ];
    }
}
