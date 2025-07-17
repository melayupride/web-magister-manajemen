<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Ruang Dosen',
                'slug' => Str::slug('Ruang Dosen'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ruang Rapat',
                'slug' => Str::slug('Ruang Rapat'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ruang Kelas',
                'slug' => Str::slug('Ruang Kelas'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Gunakan insertOrIgnore untuk menghindari duplikat
        DB::table('category_produks')->insertOrIgnore($categories);
    }
}