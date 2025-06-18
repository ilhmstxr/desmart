<?php

namespace Database\Factories;

use App\Models\farms\Crop;
use App\Models\finances\Product;
use App\Models\finances\product_categories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class productFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    private static $productCatalog = [
        ['name' => 'Beras Pandan Wangi Super', 'unit_type' => 'kg', 'price_per_unit' => 15000, 'cost_per_unit' => 11000, 'description' => 'Beras premium dengan aroma wangi alami, pulen, dan tanpa pemutih.'],
        ['name' => 'Tomat Cherry Organik', 'unit_type' => 'box', 'price_per_unit' => 25000, 'cost_per_unit' => 18000, 'description' => 'Satu kotak tomat cherry organik segar, kaya akan vitamin dan antioksidan.'],
        ['name' => 'Jagung Manis Pipil (Beku)', 'unit_type' => 'kg', 'price_per_unit' => 30000, 'cost_per_unit' => 22000, 'description' => 'Jagung manis pipil beku, praktis dan siap olah untuk berbagai masakan.'],
        ['name' => 'Kangkung Hidroponik', 'unit_type' => 'bunch', 'price_per_unit' => 5000, 'cost_per_unit' => 2500, 'description' => 'Satu ikat kangkung segar dari pertanian hidroponik, bebas pestisida.'],
        ['name' => 'Ubi Cilembu Madu', 'unit_type' => 'kg', 'price_per_unit' => 18000, 'cost_per_unit' => 12000, 'description' => 'Ubi cilembu asli dengan rasa manis seperti madu saat dipanggang.'],
        ['name' => 'Telur Ayam Kampung Omega-3', 'unit_type' => 'box', 'price_per_unit' => 35000, 'cost_per_unit' => 28000, 'description' => 'Satu kotak (isi 10) telur ayam kampung yang kaya akan Omega-3.'],
    ];
    public function definition(): array
    {
        $productInfo = $this->faker->randomElement(self::$productCatalog);
        return [
            'product_category_id' => product_categories::factory(),
            'crop_id' => Crop::factory(),
            'created_by_user_id' => User::factory(),

            'name' => $productInfo['name'],
            'sku' => $this->faker->unique()->ean8,
            'price_per_unit' => $productInfo['price_per_unit'],
            'unit_type' => $productInfo['unit_type'],
            'cost_per_unit' => $productInfo['cost_per_unit'],
            'description' => $productInfo['description'],

            'stock_quantity' => $this->faker->numberBetween(10, 200),
            'minimum_stock' => 10,
            'status' => 'active',

            'images' => json_encode([
                'products/' . $this->faker->slug(3, false) . '.jpg',
                'products/' . $this->faker->slug(3, false) . '.jpg',
            ]),
        ];
    }
}
