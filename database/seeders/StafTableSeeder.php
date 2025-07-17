<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Staf;
use Illuminate\Support\Facades\DB;

class StafTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan tabel terlebih dahulu
        DB::table('stafs')->truncate();

        $stafData = [
            [
                'title' => 'Veronika, S.E., M.S.M',
                'nip' => '197910032009102001',
                'jabatan' => 'Staf',
                'image' => 'images/cavbgLiXbO3twnjELoSvfVonPhuKiBVKaWGhUUwO.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Ayu Mutia, S.IAN, M.A.P',
                'nip' => '201801199407242001',
                'jabatan' => 'Staf',
                'image' => 'images/7qyt9kDn9R1Dg9pnke56FsvdICSMe8HyViwyP004.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Muzakkir, S.Sos',
                'nip' => '197603102005011002',
                'jabatan' => 'Staf',
                'image' => 'images/HYZRF7DkWZGMXdJgGqcS9WuNvn9PW8sPAzOHbwsB.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Cut Fauziah, S.E., M.S.M',
                'nip' => '197906252005012002',
                'jabatan' => 'Staf',
                'image' => 'images/dAukGj8R7KuZfgVzacxJiua8ywVk7BpRif6av8Jz.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        foreach ($stafData as $staf) {
            Staf::create($staf);
        }
    }
}