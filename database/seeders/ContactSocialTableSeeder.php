<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContactSocial;
use Illuminate\Support\Facades\DB;

class ContactSocialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan tabel terlebih dahulu
        DB::table('contact_socials')->truncate();

        $contactData = [
            [
                'link_ig' => 'https://www.instagram.com/univ.malikussaleh/',
                'link_fb' => 'https://web.facebook.com/portal.unimal/',
                'link_x' => 'https://x.com/UMalikussaleh/',
                'link_linkedin' => 'https://www.linkedin.com/school/universitas-malikussaleh/',
                'address' => '<div>Jl. Tgk Chik Ditiro No. 26, <br>
                    Lancang Garam, Kota Lhokseumawe <br>
                    Provinsi Aceh - Indonesia <br></div>',
                'phone' => '+62811675194',
                'fax' => '+62 645 40211',
                'website' => 'https://ppimfe.unimal.ac.id',
                'email' => 'ppim@unimal.ac.id',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        ContactSocial::insert($contactData);
    }
}