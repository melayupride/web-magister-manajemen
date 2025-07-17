<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Berita',
                'slug' => Str::slug('Berita'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pengumuman',
                'slug' => Str::slug('Pengumuman'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('categories')->insert($categories);
    }
}