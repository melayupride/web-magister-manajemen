<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ded;
use Illuminate\Support\Facades\DB;

class DedTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('deds')->truncate();

        $data = [
            [
                'body' => '<div>DOKUMEN EVALUASI DIRI<br>AKREDITASI PROGRAM STUDI&nbsp;<br>MAGISTER ILMU MANAJEMEN&nbsp;</div>',
                'filedata' => 'images/gDC0CFhWu9ToMuR0XJkzFk1vNPJbaWvWOFLHlNwm.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('deds')->insert($data);
    }
}