<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DownloadAkademik;
use Illuminate\Support\Facades\DB;

class DownloadAkademikTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan tabel terlebih dahulu
        DB::table('downloadakademiks')->truncate();

        $downloadData = [
            [
                'body' => '<div>Dokumen Lampiran_Fotmulir - AMI</div>',
                'filedata' => 'images/3N7kK40BEHf0VGzjsd8BbDZ6USSpXmrwUHfdEnRJ.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'body' => '<div>Dokumen SK Penjaminan Mutu Fakultas</div>',
                'filedata' => 'images/gVBRTYBZshrO7KGLBqqqKeoaI3LnzamTJKPSkg6p.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'body' => '<div>Dokumen Legal Penjaminan Mutu Universitas</div>',
                'filedata' => 'images/q44Ro81F6H7jYMxd0aEtkmIXQNNYKegl5BrsHII2.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'body' => '<div>Dokumen Serifikat AMI-Bukti Sahih</div>',
                'filedata' => 'images/6rffhVphiBiYaTAzo6A8zF05qAZPXJyPFxzx4mhR.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'body' => '<div>Panduan Kurikulum PMIM 2020</div>',
                'filedata' => 'images/EfCfkXv72kzzQsEGUGPaNs2GHUXFZMuUeKcy7qHa.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        // Masukkan data secara manual
        DB::table('downloadakademiks')->insert($downloadData);
    }
}