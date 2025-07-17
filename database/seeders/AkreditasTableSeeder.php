<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Akreditas;
use Illuminate\Support\Facades\DB;

class AkreditasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan tabel terlebih dahulu
        DB::table('akreditas')->truncate();

        $akreditasData = [
            [
                'body' => 'Sertifikat Akreditasi',
                'image' => 'images/lDwX202h1GWEdnqGBiOlydB0EN6bqEWkQcSdxQwG.jpg',
                'description' => '<div> Program studi <strong>Ilmu Manajemen</strong> telah meraih akreditasi A dari BAN-PT dengan masa berlaku 5 tahun sejak 2018 hingga 2023.</div>',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        foreach ($akreditasData as $akreditasi) {
            Akreditas::create($akreditasi);
        }
    }
}