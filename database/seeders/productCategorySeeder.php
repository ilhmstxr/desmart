<?php

namespace Database\Seeders;

use App\Models\finances\product_categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class productCategorySeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // PINDAHKAN DAFTAR LENGKAP DARI FACTORY KE SINI
        $categories = [
            ['name' => 'Sayuran Daun', 'description' => 'Berbagai jenis sayuran yang diambil manfaatnya dari daun, seperti bayam, kangkung, dan selada.'],
            ['name' => 'Sayuran Buah', 'description' => 'Berbagai jenis sayuran yang diambil manfaatnya dari buahnya, seperti tomat, terong, dan mentimun.'],
            ['name' => 'Umbi-umbian', 'description' => 'Tanaman yang menghasilkan umbi atau akar sebagai produk utama, seperti kentang, ubi, dan singkong.'],
            ['name' => 'Kacang-kacangan', 'description' => 'Berbagai jenis kacang dan polong-polongan, seperti kacang panjang, buncis, dan kedelai.'],
            ['name' => 'Buah-buahan', 'description' => 'Berbagai jenis buah-buahan segar, seperti mangga, pisang, dan jeruk.'],
            ['name' => 'Rempah & Herbal', 'description' => 'Tanaman yang digunakan sebagai bumbu masak atau obat tradisional, seperti jahe, kunyit, dan serai.'],
            ['name' => 'Beras & Biji-bijian', 'description' => 'Produk pangan pokok seperti beras, jagung, dan sorgum.'],
        ];
        
        foreach ($categories as $categoryData) {
            // Gunakan firstOrCreate dengan data yang lebih lengkap
            product_categories::firstOrCreate(
                ['name' => $categoryData['name']], // Kunci unik untuk pengecekan
                [                                  // Data untuk dibuat jika belum ada
                    'slug' => Str::slug($categoryData['name']),
                    'description' => $categoryData['description'],
                ]
            );
        }
    }
}
