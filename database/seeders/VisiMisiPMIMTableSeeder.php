<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VisiMisi;
use Illuminate\Support\Facades\DB;

class VisiMisiPMIMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                // Kosongkan tabel terlebih dahulu jika sudah ada data
        DB::table('visi_misis')->truncate();

        // Data sejarah PMIM
        $visimisi = [
            'body' => '<div><strong>VISI<br>"Menjadi Program Studi Magister Yang Berdaya Saing Dalam Pengembangan Ilmu Manajemen Berbasis Potensi Lokal di Asia Tenggara"</strong> <br><br><strong>MISI</strong></div><ul><li>Menyelenggarakan Layanan Pendidikan Magister Ilmu Manajemen yang Bermutu Berbasis Potensi Lokal.</li><li>Mengembangkan Aktivitas Penelitian Ilmu Manajemen yang Bermutu Berbasis Potensi Lokal.</li><li>Menghasilkan Kegiatan Pengabdian pada Masyarakat yang Berbasis Potensi Lokal untuk Peningkatan Kesejahteraan Masyarakat.</li><li>Menyelenggarakan Tata Kelola Program Studi dengan Prinsip Good University Governance.</li><li>Membangun Kerjasama Kemitraan Strategis dengan Pemerintah, Dunia Usaha dan Dunia Industri baik dalam maupun luar negeri, khususnya Asia Tenggara.</li></ul><div><strong>TUJUAN</strong></div><ul><li>Menghasilkan magister di bidang ilmu manajemen yang memiliki keterampilan managerial dan mampu mengembangkan teori manajemen berbasis potensi lokal. &nbsp;</li><li>Menghasilkan penelitian yang berkualitas di bidang ilmu manajemen yang berbasis potensi lokal untuk pengembangan IPTEK.</li><li>Menghasilkan kegiatan pengabdian pada masyarakat yang berbasis potensi lokal untuk peningkatan kesejahteraan masyarakat.</li><li>Mewujudkan tata kelola prodi yang sesuai dengan prinsip Good University Governance.</li><li>Mewujudkan kerjasama strategis dengan pemangku kepentingan (stakeholder) seperti pemerintah, dunia usaha dan dunia industri baik dalam maupun luar negeri, khususnya Asia Tenggara.</li></ul><div><strong>STRATEGI<br></strong>Pelaksanaan Strategi telah dilakukan oleh Program Magister Ilmu Manajemen secara periodik, dari hasil capaian yang dilakukan setiap periode tersebut akan dievaluasi dan disesuaikan untuk periode berikutnya. Mekanisme pencapaian strategi disesuaikan dengan permasalahan-permasalahan yang dihadapi dan diselesaikan dijabarkan secara periodik.</div>',
            'created_at' => now(),
            'updated_at' => now()
        ];

        // Masukkan data ke tabel
        VisiMisi::create($visimisi);
    }
}
