<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dkps;
use Illuminate\Support\Facades\DB;

class DkpsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('dkpss')->truncate();

        $data = [
            [
                'body' => '<div>AKREDITASI PROGRAM STUDI&nbsp;<br>LEMBAGA AKREDITASI MANDIRI EKONOMI, MANAJEMEN, AKUNTANSI DAN BISNIS&nbsp;</div>',
                'filedata' => 'images/DR3bbKkujYbSZ21ioZ8rTmhg5Wsydl6hp6ffwYge.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('dkpss')->insert($data);
    }
}