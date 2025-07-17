<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PenjaminanMutu;
use Illuminate\Support\Facades\DB;

class PenjaminanMutuTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('penjaminanmutus')->truncate();

        $data = [
            [
                'body' => '<div>Format Kontrak Kerja</div>',
                'filedata' => 'images/oolRUd838rymRnsEQQhQSXbwFHlI13WfbE5YTdg8.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'body' => '<div>Format RPS Unimal</div>',
                'filedata' => 'images/DCUWVt6Ryz4qWOvbwLXaHhJ5EjT9oZ6RWKlFqJw9.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'body' => '<div>SK Struktur LP3M</div>',
                'filedata' => 'images/U0OEMH4g1YXUyDrSH5APN5wQdtTLuajAx3omouhO.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'body' => '<div>TENTANG PENETAPAN DOKUMEN KEBIJAKAN SPMI</div>',
                'filedata' => 'images/PI5I4EFqIK42QIVO3LyqWHE1TXEM1lEYQLDnVmby.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'body' => '<div>SOP AMI UNIMAL</div>',
                'filedata' => 'images/OQctfPZ4Lgo41kHkHkt9v15SSa9fuN3DFF2vULDq.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'body' => '<div>PANDUAN AMI UNIVERSITAS MALIKUSSALEH</div>',
                'filedata' => 'images/Bgl2xWwDJcXswNJsgTCsO7L6sfjLH6BYlAkx401m.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('penjaminanmutus')->insert($data);
    }
}