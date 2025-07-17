<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kunjungan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UserSeeder::class,
            CategoriesTableSeeder::class,
            PostsTableSeeder::class,
            SejarahPMIMTableSeeder::class,
            VisiMisiPMIMTableSeeder::class,
            ProfilLulusanTableSeeder::class,
            CategoryProdukTableSeeder::class,
            ProdukTableSeeder::class,
            KerjasamaTableSeeder::class,
            RencanaStrategisTableSeeder::class,
            OrganisTableSeeder::class,
            StafTableSeeder::class,
            DaftarDosenTableSeeder::class,
            AkreditasTableSeeder::class,
            InstrumentTableSeeder::class,
            AkreditasiTableSeeder::class,
            ContactSocialTableSeeder::class,
            KunjunganTableSeeder::class,
            LogoKerjasamaTableSeeder::class,
            KelenderTableSeeder::class,
            GaleriAkademikTableSeeder::class,
            PanduanAkademikTableSeeder::class,
            DownloadAkademikTableSeeder::class,
            SemesterStatusTableSeeder::class,
            SemesterDuaTableSeeder::class,
            SemesterTigaTableSeeder::class,
            SemesterEmpatTableSeeder::class,
            DedTableSeeder::class,
            DkpsTableSeeder::class,
            AdministrasiTableSeeder::class,
            PenjaminanMutuTableSeeder::class,
            // Tambahkan seeder lainnya di sini
        ]);
    }
}
