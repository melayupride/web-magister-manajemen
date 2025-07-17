<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SemesterStatus;
use Illuminate\Support\Facades\DB;

class SemesterStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan tabel terlebih dahulu
        DB::table('semestersatus')->truncate();

        $statusData = [
            [
                'kodemk' => 'PFE 113',
                'matakuliah' => 'Manajemen Pemasaran',
                'sks' => '3',
                'filedata' => 'images/CHqUDnoTCWT0WawGPWEhdTPOX3uTrS5fXnYsXxHJ.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kodemk' => 'PFE 213',
                'matakuliah' => 'Manajemen Keuangan',
                'sks' => '3',
                'filedata' => 'images/ElI7nsrSt4axcCmxcrL5RIfjb3YsfNRGApkRCHEl.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kodemk' => 'PFE 313',
                'matakuliah' => 'Manajemen SDM dan Perilaku Organisasi',
                'sks' => '3',
                'filedata' => 'images/vNDOuLIBJzU4Obo9OsZRanx3Dspg13XFQAatllZL.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kodemk' => 'PFE 413',
                'matakuliah' => 'Organisasi Industri dan Makro Moneter',
                'sks' => '3',
                'filedata' => 'images/CjcrwpTRA4BTaHNLOtokkM8pFerNTGynlIX7nuu0.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        // Masukkan data secara manual
        DB::table('semestersatus')->insert($statusData);
    }
}