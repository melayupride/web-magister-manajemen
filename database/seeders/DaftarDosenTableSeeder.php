<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DaftarDosen;
use Illuminate\Support\Facades\DB;

class DaftarDosenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan tabel terlebih dahulu
        DB::table('daftardosens')->truncate();

        $dosenData = [
            [
                'title' => 'Dr. Marbawi, S.E., M.M',
                'image' => 'images/YsAL6yZLRf0VnFxwkYdky07fKCZpbYtoZEPNCHfb.jpg',
                'nip' => '196412312001121007',
                'jabatan' => 'Lektor Kepala',
                'sinta' => 'https://sinta.kemdikbud.go.id/authors/profile/6017496',
                'scopus' => 'https://www.scopus.com/authid/detail.uri?authorId=57201351636',
                'scholar' => 'https://scholar.google.com/citations?hl=en&user=0wOP-rQAAAAJ&view_op=list_works&sortby=pubdate',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Dr. Mohd. Heikal, S.E., M.M',
                'image' => 'images/VvCJxcO8DBCRR7lXtDYjFm4Fnlg5K8DvbRCaa3MF.jpg',
                'nip' => '1973110702006041008',
                'jabatan' => 'Lektor Kepala',
                'sinta' => 'https://sinta.kemdikbud.go.id/authors/profile/77840',
                'scopus' => 'https://ppimfe.unimal.ac.id/daftar-dosen',
                'scholar' => 'https://scholar.google.com/citations?hl=id&user=rLJuHeMAAAAJ&view_op=list_works&sortby=pubdate',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Dr. Mariyudi, S.E.,M.M',
                'image' => 'images/QK5ne5NChCe8kdk6taEnAFBK50VNUJOybShsCxYY.jpg',
                'nip' => '197302282005011002',
                'jabatan' => 'Lektor Kepala',
                'sinta' => 'https://sinta.kemdikbud.go.id/authors/profile/6020985',
                'scopus' => 'https://ppimfe.unimal.ac.id/daftar-dosen',
                'scholar' => 'https://scholar.google.com/citations?user=Oy1RvVQAAAAJ&hl=id&oi=ao',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Dr. Faisal Matriadi, S.E.,M.Si',
                'image' => 'images/fRmBfjLe46KgLDmZ5oyoWdiO6vXCXzDBzFTwsaOe.jpg',
                'nip' => '197508282002121002',
                'jabatan' => 'Lektor Kepala',
                'sinta' => 'https://sinta.kemdikbud.go.id/authors/profile/6026202',
                'scopus' => 'https://ppimfe.unimal.ac.id/daftar-dosen',
                'scholar' => 'https://scholar.google.com/citations?user=iPTo6iUAAAAJ&hl=id&oi=ao',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        foreach ($dosenData as $dosen) {
            DaftarDosen::create($dosen);
        }
    }
}