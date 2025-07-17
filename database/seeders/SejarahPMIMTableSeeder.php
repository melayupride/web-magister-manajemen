<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SejarahPMIM;
use Illuminate\Support\Facades\DB;

class SejarahPMIMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan tabel terlebih dahulu jika sudah ada data
        DB::table('sejarahpmims')->truncate();

        // Data sejarah PMIM
        $sejarah = [
            'body' => '<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>Latar Belakang</strong><br><br></div><div>Undang-undang Nomor 14 Tahun 2005 tentang Guru dan Dosen (Pasal 46 Ayat 2) menyebutkan bahwa dosen pada program diploma dan S1 minimal berpendidikan S2, sedangkan dosen pada program pascasarjana harus berpendidikan S3. Data tahun 2008 menunjukkan dari sekitar 155.000 dosen tetap Indonesia baru 60% yang berpendidikan S2/S3. Dengan asumsi 15.000 diantaranya saat ini sedang menempuh program S2, berarti masih ada 47.000 orang yang belum menempuh program S2. Di sisi lain, jumlah dan selebaran program pascasarjana Indonesia relatif tidak merata antar wilayah sehingga memerlukan strategi untuk mendukung program akselerasi peningkata kualifikasi dosen tersebut. Selain itu, dijumpai adanya ketidakseimbangan kemampuan institusi penyelenggara program pascasarjana antar wilayah untuk mendukung program akselerasi peningkatan kalifikasi dosen perguruan tinggi dari S1 ke S2 (DIKTI, 2009)<br><br></div><div>Universitas Malikussaleh (Unimal) Lhokseumawe, khususnya program Ekonomi mendapatkan kepercayaan dari DIKTI untuk menyelenggarakan Program Aliansi Pascasarjana Antar Perguruan Tinggi untuk bidang Ilmu Manajemen dengan Program Pascasarjana Ilmu Manajemen Universitas Indonesia (UI) sebagai universitas pembina. Program Aliansi ini bertujuan untuk mengembangkan pendidikan program magister diberbagai perguruan tinggi sesuai kebutuhan setempat. Bagi Unimal, program ini adalah peluang dalam rangka mengembangkan <em>Capacity Building</em> terutama dalam penyelenggaraan program pascasarjana di masa yang akan datang.<br><br>Program Pascasarjana Magister Manajemen Fakultas Ekonomi dan Bisnis Universitas Malikussaleh didasarkan pada fenomena: banyaknya peminat atau calon mahasiswa untuk PMIM, tingginya daya serap pasar tenaga kerja untuk lulusan Magister Manajemen, belum adanya lembaga pendidikan yang melaksanakan program Strata Dua (S-2) Magister Manajemen di kawasan Timur dan Tengah Provinsi Aceh.&nbsp;</div><div>Universitas Malikussaleh (Unimal) secara umum dan Fakultas Ekonomi dan Bisnis khususnya, telah mendapatkan kepercayaan dari DIKTI untuk menyelenggarakan program Aliansi Pascasarjana antar perguruan tinggi negeri pada tahun 2009. Dalam pelaksanaan aliansi tersebut, PMIM mendapatkan kesempatan untuk dibina oleh Program Pascasarjana Ilmu Manajemen (PMIM) Universitas Indonesia. Pada awal pelaksanaannya di tahun 2009, PMIM Unimal belum dapat melaksanakan kegiatan pengajaran dikarenakan belum adanya izin penyelenggaraan program dari DIKTI. Sehingga di tahun 2009, Unimal berusaha untuk melengkapi semua persyaratan dalam pengurusan izin operasionalnya. Dan program aliansi yang dipercayakan lebih difokuskan pada penyusunan kurikulum serta pemagangan dosen dan staf ke PMIM Universitas Indonesia dalam rangka mempersiapkan dosen dan staf dalam penyelenggaraan program nantinya.<br><br>Dalam upaya memenuhi tingginya harapan masyarakat terhadap hadirnya PMIM, maka dibentuklah Tim Task Force program Pascasarjana Unimal yang bertugas mengusahakan mempercepat keluarnya izin operasional dengan berkoordinasi dengan berbagai pihak terkait. Tim Task Force ini efektif mulai bekerja pada 5 April 2010, yang terbagi ke dalam 3 tim yaitu: Tim Penyusun Proposal, Tim Narasumber/Pakar, dan Tim Persiapan Proposal Izin. Harapan masyarakat tersebut terjawab dengan terbitnya KEPMEN No. 143/D/O/2010 tanggal 22 September 2010 tentang izin penyelenggaraan Program Studi Ilmu Manajemen (S2), maka PMIM Unimal sudah memungkinkan untuk memulai perkuliahan.</div><div>Diharapkan dengan lahirnya PMIM ini, lulusannya dapat menjadi tenaga kerja yang berkualitas, manajer yang profesional, independen, dan kompetitif. Pengembangan Sumber Daya Manusia (SDM) yang berkualitas merupakan tuntutan masyarakat luas termasuk dunia bisnis. Perubahan tuntutan tersebut terutama dipicu oleh pesatnya kemajuan teknologi informasi. Sumber daya manusia di masa kini dan masa yang akan datang harus dapat mengantisipasi perubahan-perubahan tuntutan masyarakat dan dunia bisnis tersebut. Program pengembangan pendidikan diharapkan dapat menjawab semua tantangan tersebut dan dituntut untuk menghasilkan sumber daya manusia yang berkualitas dan mampu bersaing. Program pengembangan pendidikan juga diharapkan dapat menjawab permintaan baik yang bersifat kebutuhan profesi (<em>Professional need),</em> kebutuhan institusi <em>(Institution need)</em> maupun kebutuhan komunitas <em>(Community need)</em>.</div><div><br><br></div>',
            'created_at' => now(),
            'updated_at' => now()
        ];

        // Masukkan data ke tabel
        SejarahPMIM::create($sejarah);
    }
}