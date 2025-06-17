<?php

namespace Database\Seeders;

use App\Models\Expense;
use App\Models\farms\Crop;
use App\Models\farms\Field;
use App\Models\finances\expenses_category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class expenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $crops = Crop::all();
        $fields = Field::all();
        $categories = expenses_category::all();

        if ($users->isNotEmpty() && $crops->isNotEmpty() && $fields->isNotEmpty() && $categories->isNotEmpty()) {
            Expense::factory(30)->create(function () use ($users, $crops, $fields, $categories) {
                return [
                    'created_by' => $users->random()->id,
                    'crop_id' => $crops->random()->id,
                    'field_id' => $fields->random()->id,
                    'expenses_category_id' => $categories->random()->id,
                ];
            });
        }
    }
}
