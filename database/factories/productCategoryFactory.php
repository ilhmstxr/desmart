<?php

namespace Database\Factories;

use App\Models\finances\product_categories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class productCategoryFactory extends Factory
{
    protected $model = product_categories::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        // HAPUS ARRAY STATIS
        // Ganti dengan Faker untuk membuat data yang benar-benar acak.
        // unique() penting agar factory tidak membuat duplikatnya sendiri saat dipanggil berulang kali.
        $name = $this->faker->unique()->word();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->sentence(),
        ];
    }
}
