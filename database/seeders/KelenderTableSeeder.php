<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelender;
use Illuminate\Support\Facades\DB;

class KelenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan tabel terlebih dahulu
        DB::table('kelenders')->truncate();

        $kalenderData = [
            [
                'body' => '<div><strong>Kelender Akademik Tahun 2023/2024</strong></div>',
                'filedata' => 'images/E6ZfnutaisgkLCVsOPFsiSaT1tMQ7okfWyImJPMX.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'body' => '<div><strong>Kelender Akademik program Sarjana dan Diploma Tahun Akademik 2022/2023</strong></div>',
                'filedata' => 'images/v5g1yTfrwQAsSwC8bLIMA6YL4rxTkiDoTLbRknsJ.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        // Masukkan data secara manual
        DB::table('kelenders')->insert($kalenderData);
    }
}