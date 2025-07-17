<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PanduanAkademik;
use Illuminate\Support\Facades\DB;

class PanduanAkademikTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan tabel terlebih dahulu
        DB::table('panduanakademiks')->truncate();

        $panduanData = [
            [
                'body' => '<div>Buku Panduan Akademik PMIM 2022</div>',
                'filedata' => 'images/OfrDqYiWXSonuooqGeSftNqxUdCmUJAsz9AxVLaB.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        // Masukkan data secara manual
        DB::table('panduanakademiks')->insert($panduanData);
    }
}