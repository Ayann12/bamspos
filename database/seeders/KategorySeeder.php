<?php

namespace Database\Seeders;

use App\Models\Kategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class KategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 5; $i++) {
            Kategory::create([
                'nama_kategori' => $faker->sentence(2),
                'slug' => $faker->slug(),
                'deskripsi' => $faker->paragraph(3),
            ]);
        }
    }
}
