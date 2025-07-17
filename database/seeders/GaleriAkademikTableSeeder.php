<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GaleriAkademik;
use Illuminate\Support\Facades\DB;

class GaleriAkademikTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan tabel terlebih dahulu
        DB::table('galeriakademiks')->truncate();

        $galeriData = [
            [
                'image' => 'images/FxDBcU47gtqxYuZUjMfa5YlQMza7SKJlSUFcqHoP.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'image' => 'images/UuQvXEsy3u7XnMPv7AQKXOOJTlJdSdrmUdXKIsoV.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'image' => 'images/1NlVW3dWPT2z2iMljJLLn1RUpklztX95d9rdCssO.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'image' => 'images/1o82JaxTEzAQvAtVsGJtqkW643F1HIuRgUuHpiBX.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'image' => 'images/oBwNFRDtvbusJCRWOvrydSaFJz3FlOG7WcNlotFH.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'image' => 'images/s6XDKglkHoHtX48UpY0z4tpKbtbvjAXVIfzHaTdu.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        // Masukkan data secara manual
        DB::table('galeriakademiks')->insert($galeriData);
    }
}