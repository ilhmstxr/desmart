<?php

namespace Database\Seeders;

use App\Models\finances\marketplaces;
use Database\Factories\marketplacesFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class marketplacesSeeder extends Seeder
{

    public $marketplaces;


    /**
     * Run the database seeds.
     */
    public function run(): void
    {


       
        // Sekarang, baris ini menjadi valid
        $this->marketplaces = marketplacesFactory::$marketplaces;

        foreach ($this->marketplaces as $data) {
            marketplaces::firstOrCreate(
                ['name' => $data['name']],
                $data
            );
        }
    }
}
