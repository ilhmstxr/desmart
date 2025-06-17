<?php

namespace Database\Factories;

use App\Models\finances\expenses_category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class expensesCategoryFactory extends Factory
{
    protected $model = expenses_category::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    private static $expensesCategory = [
        ['name' => 'Benih', 'description' => 'Biaya untuk pembelian bibit tanaman.'],
        ['name' => 'Bibit', 'description' => 'Biaya untuk pembelian benih tanaman .'],
        ['name' => 'Pupuk', 'description' => 'Biaya untuk pembelian pupuk organik dan anorganik.'],
        ['name' => 'Herbisida', 'description' => 'Biaya untuk pengendalian gulma.'],
        ['name' => 'Pestisida', 'description' => 'Biaya untuk pengendalian hama.'],
        ['name' => 'Upah Tenaga Kerja', 'description' => 'Biaya untuk gaji dan upah harian para pekerja.'],
        ['name' => 'Sewa Alat & Mesin', 'description' => 'Biaya untuk sewa traktor, pompa air, dan peralatan lainnya.'],
        ['name' => 'Transportasi & Distribusi', 'description' => 'Biaya untuk pengangkutan hasil panen ke pasar.'],
        ['name' => 'Listrik & Air', 'description' => 'Biaya utilitas untuk operasional pertanian.'],
        ['name' => 'Perawatan & Perbaikan', 'description' => 'Biaya untuk perbaikan alat, mesin, dan infrastruktur.'],

    ];
    public function definition(): array
    {
        $categoryInfo = $this->faker->randomElement(self::$expensesCategory);
        return [
            'name' => $categoryInfo['name'],
            'description' => $categoryInfo['description'],
        ];
    }
}
