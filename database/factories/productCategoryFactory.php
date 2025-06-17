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

    private static $productCategories = [
        ['name' => 'Sayuran Daun', 'description' => 'Berbagai jenis sayuran yang diambil manfaatnya dari daun, seperti bayam, kangkung, dan selada.'],
        ['name' => 'Sayuran Buah', 'description' => 'Berbagai jenis sayuran yang diambil manfaatnya dari buahnya, seperti tomat, terong, dan mentimun.'],
        ['name' => 'Umbi-umbian', 'description' => 'Tanaman yang menghasilkan umbi atau akar sebagai produk utama, seperti kentang, ubi, dan singkong.'],
        ['name' => 'Kacang-kacangan', 'description' => 'Berbagai jenis kacang dan polong-polongan, seperti kacang panjang, buncis, dan kedelai.'],
        ['name' => 'Buah-buahan', 'description' => 'Berbagai jenis buah-buahan segar, seperti mangga, pisang, dan jeruk.'],
        ['name' => 'Rempah & Herbal', 'description' => 'Tanaman yang digunakan sebagai bumbu masak atau obat tradisional, seperti jahe, kunyit, dan serai.'],
        ['name' => 'Beras & Biji-bijian', 'description' => 'Produk pangan pokok seperti beras, jagung, dan sorgum.'],
    ];
    public function definition(): array
    {
        $categoryInfo = $this->faker->randomElement(self::$productCategories);
        return [
            'name' => $categoryInfo['name'],
            'slug' => Str::slug($categoryInfo['name']),
            'description' => $categoryInfo['description'],
        ];
    }
}
