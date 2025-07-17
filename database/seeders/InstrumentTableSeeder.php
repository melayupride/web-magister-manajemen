<?php

namespace Database\Seeders;

use App\Models\Instrumen;
use Illuminate\Database\Seeder;
use App\Models\Instrument;
use Illuminate\Support\Facades\DB;

class InstrumentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan tabel terlebih dahulu
        DB::table('instruments')->truncate();

        $instruments = [
            [
                'body' => 'BAN PT',
                'link' => 'https://www.banpt.or.id/prosedur-dan-instrumen/unduh-instrumen/',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'body' => 'LAM PT Kes',
                'link' => 'https://lamptkes.org/File-Unduhan-Instrumen-9-kriteria',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'body' => 'LAM EMBA',
                'link' => 'https://lamemba.or.id/instrumen-akreditasi/',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'body' => 'LAM SAMA',
                'link' => 'https://lamsama.or.id/unduh-instrumen/',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        foreach ($instruments as $instrument) {
            Instrumen::create($instrument);
        }
    }
}