<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SemesterTiga;
use Illuminate\Support\Facades\DB;

class SemesterTigaTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('semestertigas')->truncate();

        $matakuliahData = [
            [
                'kodemk' => 'MMP 133',
                'matakuliah' => 'Perilaku konsumen',
                'sks' => '3',
                'kontrensasi' => 'Manajemen Pemasaran',
                'filedata' => 'images/v0t76ebC3HWGtrbmk7QdmtIi9Pcy8gV8Pxni9TrH.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kodemk' => 'MMP 233',
                'matakuliah' => 'Pemasaran Jasa',
                'sks' => '3',
                'kontrensasi' => 'Manajemen Pemasaran',
                'filedata' => 'images/fPoqOrQiaDYanaVVAf86pCVXod1rIZ2dy2VfRuMl.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kodemk' => 'MMP 333',
                'matakuliah' => 'Komunikasi pemasaran terpadu',
                'sks' => '3',
                'kontrensasi' => 'Manajemen Pemasaran',
                'filedata' => 'images/eg6M6UGkQWMBHa3lIWQWS6suSf4bSdnzs0u8ztiO.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kodemk' => 'MMP 233',
                'matakuliah' => 'Manajemen Produk &amp; Kebijakan Harga',
                'sks' => '3',
                'kontrensasi' => 'Pilihan 1',
                'filedata' => 'images/hp0ffhzQlaGTYlES7irsj41FP92Lm54kjv9nKNkR.pdf#toolbar=0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kodemk' => 'MMK 233',
                'matakuliah' => 'Manajemen Keuangan Daerah',
                'sks' => '3',
                'kontrensasi' => 'Manajemen Keuangan',
                'filedata' => 'images/6bYnList0NeCDbYKQX7ZvJBgK5NpbiEYNpNkHOaI.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kodemk' => 'MMK 333',
                'matakuliah' => 'Analisis Laporan Keuangan',
                'sks' => '3',
                'kontrensasi' => 'Manajemen Keuangan',
                'filedata' => 'images/thnzQ98u4NwJcd8ay4B4QyrTiBJmRorwVsVViZfL.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('semestertigas')->insert($matakuliahData);
    }
}