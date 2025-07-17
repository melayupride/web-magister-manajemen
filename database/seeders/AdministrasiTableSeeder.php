<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Administrasi;
use Illuminate\Support\Facades\DB;

class AdministrasiTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('administrasis')->truncate();

        $data = [
            [
                'body' => '<div><strong>1.</strong> Petugas Perpustakaann</div>',
                'filedata' => 'images/TXRWzrX0fsOgAJFo5IAsLBWfMtbCUt8OqdtOkf7A.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'body' => '<div><strong>2.</strong> Tenaga Laboran</div>',
                'filedata' => 'images/auD6yMAdhbBwb5p9uAwGFIixl0sUBVbUouP8vfOO.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'body' => '<div><strong>3.</strong> Staf Akademik</div>',
                'filedata' => 'images/Q3mIFm6jKyDf2JlctWfWKN1tSXbnBxLxeiHXC0ea.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'body' => '<div><strong>4.</strong> Staf Keuangan</div>',
                'filedata' => 'images/wYM6bRVA7iwZbce5tVEjgjcRxllVCVGJltsEA1l1.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'body' => '<div><strong>5.</strong> Staf Kemahasiswaan</div>',
                'filedata' => 'images/nqbB3zccJ7h99LbObD7Wd9Fo9I9mAIN8AC5UuGam.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'body' => '<div><strong>6.</strong> Kaprodi</div>',
                'filedata' => 'images/ei29LwaZmX8akGUbZKTR58KcdrOftjT3CVlEpVB3.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('administrasis')->insert($data);
    }
}