<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kerjasama;
use Illuminate\Support\Facades\DB;

class KerjasamaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan tabel terlebih dahulu jika sudah ada data
        DB::table('kerjasamas')->truncate();

        $kerjasamas = [
            [
                'body' => '<div>Kerja Sama Dengan Program Pascasarjana UNTAN</div>',
                'filedata' => 'images/bbxb0IAR8RkBYlt2HFryh4s8LoGjCnzrALNAFIjZ.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'body' => '<div>Kerja Sama Dengan Program Pascasarjana UNTIRTA</div>',
                'filedata' => 'images/aiEZjs91sGGDg7YMsitZgUdRg5RsuDY97rJT6m1W.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'body' => '<div>Kerja Sama Dengan Progran Pascasarjana USK</div>',
                'filedata' => 'images/wWV24Sb4ZtDkhjDUJm4H1oDmhZlcgF3QVIzDAanS.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        foreach ($kerjasamas as $kerjasama) {
            Kerjasama::create($kerjasama);
        }
    }
}