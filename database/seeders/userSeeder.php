<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat pengguna spesifik
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'role' => 'admin',
            'password' => bcrypt('123'), // Menggunakan bcrypt untuk hashing password
            // 'password' => Hash::make('password'),
        ]);

        User::factory()->create([
            'name' => 'Manager',
            'email' => 'manager@example.com',
            'role' => 'manager',
            'password' => Hash::make('password'),
        ]);

        // Membuat 5 pengguna acak sebagai pekerja
        User::factory(5)->create(['role' => 'worker']);
    }
}
