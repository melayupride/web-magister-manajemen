<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Organis;
use Illuminate\Support\Facades\DB;

class OrganisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan tabel terlebih dahulu
        DB::table('organis')->truncate();

        $organisData = [
            [
                'title' => 'Struktur Organisasi Priode 2023 - 2024',
                'image' => 'images/EOJkInMuT1xxwT1aE7mwimcp0EK4cBOua9gY9cia.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Struktur Organisasi Priode 2022 - 2023',
                'image' => 'images/4MytLpKQp0AM40DfFIXOhj1gipopYs20QLTig8aZ.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        foreach ($organisData as $organis) {
            Organis::create($organis);
        }
    }
}