<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Akreditasi;
use Illuminate\Support\Facades\DB;

class AkreditasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan tabel terlebih dahulu
        DB::table('akreditasis')->truncate();

        $akreditasiData = [
            [
                'body' => '<div>Kriteria 9 Peraturan-BAN-PT-Nomor-21-2022-Instrumen-EMBA</div>',
                'filedata' => 'images/CkEyAecynSjMSfTpRG9aCwJZNieMv0QBGWvxgUpw.pdf',
                'status' => 'Masih Berlaku',
                'peringkat' => '',
                'lembaga_akreditasi' => 'BAN-PT',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'body' => '<div>Kriteria 8 Peraturan-BAN-PT-Nomor-21-2022-Instrumen-EMBA</div>',
                'filedata' => 'images/yjdgMKOw6RErAmv12yM3LEEHeHFXRqry0VMbltGm.pdf',
                'status' => 'Masih Berlaku',
                'peringkat' => '',
                'lembaga_akreditasi' => 'BAN-PT',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'body' => '<div>Kriteria 7 Peraturan-BAN-PT-Nomor-21-2022-Instrumen-EMBA</div>',
                'filedata' => 'images/ALUDXksTtDtZWinb2piLap3yz9BBddocQ57QdaBq.pdf',
                'status' => 'Masih Berlaku',
                'peringkat' => '',
                'lembaga_akreditasi' => 'BAN-PT',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        foreach ($akreditasiData as $data) {
            Akreditasi::create($data);
        }
    }
}