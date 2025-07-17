<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LogoKerjasama;
use Illuminate\Support\Facades\DB;

class LogoKerjasamaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan tabel terlebih dahulu
        DB::table('logokerjasamas')->truncate();

        $logoData = [
            [
                'title' => 'https://usk.ac.id/',
                'image' => 'images/bg5eRHNa75aizX5FDknv3hz7GCbTLmdDqB2hrCXE.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'https://untirta.ac.id/',
                'image' => 'images/stYh4ZxkyYHxAZyaCDZCtKjIBrGYeFRycZOX8DQz.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'https://unsam.ac.id/',
                'image' => 'images/ZYfAf8qnKyzkBeQjhaWdZ1Klx6xMwoQPPTficzu2.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'https://untan.ac.id/',
                'image' => 'images/1rMUQEBwLO9oaLFoyL6XwXPQog6uI2F2aAQYWLnG.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'https://www.usu.ac.id/',
                'image' => 'images/6kbuPGnlSqSQJmwwuYc52JPy8rJUrSZIHbtB22PH.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        // Masukkan data secara manual tanpa foreach
        DB::table('logokerjasamas')->insert($logoData);
    }
}