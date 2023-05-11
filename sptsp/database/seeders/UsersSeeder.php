<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Administrator',
            'role' => '0', // super admin
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        User::factory()->create([
            'name' => 'Pendaftaran',
            'role' => '1',
            'email' => 'pendaftaran@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        User::factory()->create([
            'name' => 'Pengaduan',
            'role' => '2',
            'email' => 'pengaduan@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        User::factory()->create([
            'name' => 'Kasir',
            'role' => '3',
            'email' => 'kasir@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        User::factory()->create([
            'name' => 'Produk',
            'role' => '4',
            'email' => 'produk@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        User::factory()->create([
            'name' => 'Admin Antrian',
            'role' => '5', // ANTRIAN
            'email' => 'antrian@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
