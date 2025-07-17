<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SemesterDua;
use Illuminate\Support\Facades\DB;

class SemesterDuaTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('semesterduas')->truncate();

        $courses = [
            [
                'kodemk' => 'PFE 123',
                'matakuliah' => 'Metodologi Riset Bisnis',
                'sks' => '3',
                'filedata' => 'images/kOpQGAN5FxYNZ7VDfa31yukVxvAv8cQjux13HaAK.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kodemk' => 'MPFE 223',
                'matakuliah' => 'Manajemen Strategic',
                'sks' => '3',
                'filedata' => 'images/10VBnsApE9HXSrGZyO6oDnCofoaLzkwHksCEh3im.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kodemk' => 'PFE 323',
                'matakuliah' => 'Keuangan Perusahaan dan Daerah',
                'sks' => '3',
                'filedata' => 'images/C29lLytmp5ifKi4xCe1XbgMKmZkuOOO49NfKjAUc.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kodemk' => 'PFE 423',
                'matakuliah' => 'Bisnis Internasional',
                'sks' => '3',
                'filedata' => 'images/qUgeLTOKaMWt5r88DFW6Q1LLiGEOG57hQUlCqgYq.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('semesterduas')->insert($courses);
    }
}