<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SemesterEmpat;
use Illuminate\Support\Facades\DB;

class SemesterEmpatTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('semesterempats')->truncate();

        $matakuliahData = [
            [
                'matakuliah' => 'Tesis',
                'sks' => '6',
                'filedata' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('semesterempats')->insert($matakuliahData);
    }
}