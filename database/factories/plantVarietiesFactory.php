<?php

namespace Database\Factories;

use App\Models\farms\plant_varieties;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class plantVarietiesFactory extends Factory
{
    protected $model = plant_varieties::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    private static $plant_varieties = [
        ['plant_name' => 'Padi', 'variety_name' => 'Ciherang', 'description' => 'Varietas padi sawah irigasi dataran rendah, tahan terhadap hama wereng.'],
        ['plant_name' => 'Padi', 'variety_name' => 'IR64', 'description' => 'Varietas padi unggul yang populer karena rasanya yang pulen.'],
        ['plant_name' => 'Jagung', 'variety_name' => 'Bisi-18', 'description' => 'Varietas jagung hibrida dengan potensi hasil tinggi dan tahan penyakit.'],
        ['plant_name' => 'Tomat', 'variety_name' => 'Servo F1', 'description' => 'Tomat hibrida yang cocok untuk dataran rendah hingga menengah, tahan layu bakteri.'],
        ['plant_name' => 'Cabai', 'variety_name' => 'Rawit Merah', 'description' => 'Cabai kecil dengan tingkat kepedasan yang tinggi, banyak diminati pasar.'],
        ['plant_name' => 'Bawang Merah', 'variety_name' => 'Bima Brebes', 'description' => 'Varietas unggul dari Brebes dengan umbi besar dan warna merah cerah.'],
        ['plant_name' => 'Singkong', 'variety_name' => 'Gajah', 'description' => 'Varietas singkong dengan umbi besar, cocok untuk industri tapioka.'],
    ];
    public function definition(): array
    {
        $varietyInfo = $this->faker->randomElement(self::$plant_varieties);
        return [
            'plant_name' => $varietyInfo['plant_name'],
            'variety_name' => $varietyInfo['variety_name'],
            'description' => $varietyInfo['description'],
        ];
    }
}
