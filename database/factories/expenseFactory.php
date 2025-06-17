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
     *c
     * @return array<string, mixed>
     */
    private static $expensesScenarios = [
        ['name' => 'Benih', 'description' => 'Pembelian 50kg benih jagung hibrida Bisi-18', 'vendor' => 'Toko Tani Maju Jaya', 'amount_range' => [500000, 1500000]],
        ['name' => 'Bibit', 'description' => 'Pembelian 50kg bibit jagung hibrida Bisi-18', 'vendor' => 'Toko Tani Maju Jaya', 'amount_range' => [500000, 1500000]],
        ['name' => 'Pupuk', 'description' => 'Pembelian 10 karung pupuk NPK Mutiara 16-16-16', 'vendor' => 'Distributor Pupuk Kaltim', 'amount_range' => [2000000, 3500000]],
        ['name' => 'Herbisida', 'description' => 'Pembelian 1 botol herbisida 50 SC untuk hama wereng', 'vendor' => 'Kios Pertanian Barokah', 'amount_range' => [100000, 200000]],
        ['name' => 'Pestisida', 'description' => 'Pembelian 2 botol pestisida Regent 50 SC untuk hama wereng', 'vendor' => 'Kios Pertanian Barokah', 'amount_range' => [150000, 300000]],
        ['name' => 'Upah Tenaga', 'description' => 'Upah 5 orang pekerja harian untuk penanaman', 'vendor' => 'Pekerja Harian Lepas', 'amount_range' => [750000, 1250000]],
        ['name' => 'Sewa Alat & mesin', 'description' => 'Biaya sewa traktor untuk pembajakan lahan 1 hektar', 'vendor' => 'Sewa Traktor Pak Budi', 'amount_range' => [600000,  900000]],
        ['name' => 'Transportasi & Distribusi', 'description' => 'Biaya transportasi dan distribusi jagung hibrida Bisi-18 ke pasar', 'vendor' => 'Transportasi & Distribusi', 'amount_range' => [500000,  800000]],
        ['name' => 'Listrik & Air', 'description' => 'Biaya listrik dan air untuk penanaman jagung hibrida Bisi-18', 'vendor' => 'Listrik & Air', 'amount_range' => [500000,  800000]],
        ['name' => 'Perawatan & Perbaikan', 'description' => 'Biaya perawatan dan perbaikan lahan untuk penanaman jagung hibrida Bisi-18', 'vendor' => 'Perawatan & Perbaikan', 'amount_range' => [500000,  800000]],

    ];
    public function definition(): array
    {
        $scenario = $this->faker->randomElement(self::$expensesScenarios);

        $category = expenses_category::firstOrcreate([
            'name' => $scenario['name'],
        ]);

        return [
            'created_by' => User::factory(),
            'crop_id' => Crop::factory(),
            'field_id' => Field::factory(),

            'expenses_category_id' => $category->id,
            'description' => $scenario['description'],
            'vendor_name' => $scenario['vendor'],
            'amount' => $this->faker->numberBetween($scenario['amount_range'][0], $scenario['amount_range'][1]),


            'expense_date' => $this->faker->date(),
            'expense_number' => $this->faker->unique()->uuid,
            'payment_method' => $this->faker->randomElement(['cash', 'bank_transfer', 'check', 'credit_card']),
            'status' => $this->faker->randomElement(['paid', 'pending']),
            'receipt_path' => 'receipts/' . $this->faker->uuid . '.jpg', // Menghasilkan path kwitansi dummy
            'notes' => $this->faker->sentence,
        ];
    }
}
