<?php

namespace Database\Seeders;

use App\Models\Rencanastrategi;
use Illuminate\Database\Seeder;
use App\Models\RencanaStrategis;
use Illuminate\Support\Facades\DB;

class RencanaStrategisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan tabel terlebih dahulu
        DB::table('rencanastrategis')->truncate();

        $rencanaStrategis = [
            [
                'body' => '<div>Rencana Strategis PMIM 2020-2024</div>',
                'filedata' => 'images/DS9CEDXrrtDfHPMCmEcjZ7xtLsiVF3M5zy19J8U6.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        foreach ($rencanaStrategis as $renstra) {
            Rencanastrategi::create($renstra);
        }
    }
}