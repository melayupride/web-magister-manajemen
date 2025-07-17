<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProfilLulusan;
use Illuminate\Support\Facades\DB;

class ProfilLulusanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan tabel terlebih dahulu jika sudah ada data
        DB::table('profillulusans')->truncate();

        // Data profil lulusan
        $profil = [
            'body' => '<ol><li><strong>&nbsp;</strong>Mampu menstranfer pengetahuan dalam proses belajar mengajar, menghasilkan dan mendesiminasikan tinjauan ilmiah yang bersifat krusial yang memuat pemecahan masalah dengan pendekatan empiris inter disiplin atau multi disiplin.</li><li>Mampu&nbsp; menilai permasalahan dalam Strategic Human Resource Management dan menggunakan metode-metode ilmiah serta teori-teori Strategic Human Resource Management terkini untuk problem solving.</li><li>Mampu menyelesaikan masalah klien serta ikut serta dalam perencanaan dan implementasi bisnis, mengevaluasi bisnis klien, mengidentifikasi dan mengembangkan strategi bisnis, perencanaan startegi bisnis, mengembangkan keahlian bagi pemilik bisnis dan membantu proses rekruitmen dan pelatihan bagi para karyawan pemilik bisnis.</li><li>Mampu menghasilkan metode-metode baru atau ide dan inovasi produk dan jasa bagi masyarakat.</li></ol>',
            'created_at' => now(),
            'updated_at' => now()
        ];

        // Masukkan data ke tabel
        ProfilLulusan::create($profil);
    }
}