<?php

namespace Database\Factories;

use App\Models\finances\marketplaces;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class marketplacesFactory extends Factory
{
    protected $model = marketplaces::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public static $marketplaces = [
        ['name' => 'Tokopedia', 'url' => 'https://www.tokopedia.com', 'is_active' => true],
        ['name' => 'Shopee', 'url' => 'https://www.shopee.co.id', 'is_active' => true],
        ['name' => 'Bukalapak', 'url' => 'https://www.bukalapak.com', 'is_active' => true],
        ['name' => 'Pasar Tani Lokal', 'url' => null, 'is_active' => true],
        ['name' => 'Website Pertanian Sendiri', 'url' => 'https://myfarm.com', 'is_active' => false],
    ];

    public function definition(): array
    {
        $marketplacesInfo = $this->faker->randomElement(self::$marketplaces);
        return [
            'name' => $marketplacesInfo['name'],
            'url' => $marketplacesInfo['url'],
            'is_active' => $marketplacesInfo['is_active'],
        ];
    }
}
