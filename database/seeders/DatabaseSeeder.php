<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            userSeeder::class,
            farmSeeder::class,
            fieldSeeder::class,
            expensesCategorySeeder::class,
            productCategorySeeder::class,
            marketplacesSeeder::class,
            plantVarietiesSeeder::class,
            growthStagesSeeder::class,
            cropSeeder::class,
            expensesSeeder::class,
            marketplaceListingsSeeder::class,
            salesSeeder::class,
            productSeeder::class,
            scheduleSeeder::class,
        ]);
    }
}
