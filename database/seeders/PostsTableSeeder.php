<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil user pertama (asumsi sudah ada dari UserSeeder)
        $user = User::first(); 
        
        // Ambil 2 kategori pertama (asumsi sudah ada dari CategorySeeder)
        $categories = Category::take(2)->get(); 

        $posts = [
            [
                'category_id' => $categories[1]->id,
                'user_id' => $user->id,
                'title' => 'PENERIMAAN MAHASISWA BARU PMIM FAKULTAS EKONOMI DAN BISNIS UNIVERSITAS MALIKUSSALEH',
                'image' => 'images/KZX38tHQ9brIH0IBRZ3WerjAOowDomxtC9P6hDma.jpg',
                'excerpt' => '',
                'body' => '<div>
                    <strong>Link Pendaftaran:</strong><br>
                    <a href="https://pendaftaran.unimal.ac.id" target="_blank">https://pendaftaran.unimal.ac.id</a>
                    </div>
                    ',
            ],
            [
                'category_id' => $categories[0]->id,
                'user_id' => $user->id,
                'title' => 'Kuliah Umum Prof. Dr. Irwan Adi Ekaputra, M.M.',
                'image' => 'images/7SCD4w39wBau4yXuQ8HKFnaLHuundIKhmuYg4AkU.jpg',
                'excerpt' => '',
                'body' => '<p><strong>Kuliah Umum</strong> dilaksanakan <strong>Sabtu, 20 Juli 2019</strong> dengan tema <em>Cryptocurrency & Blockchain</em> yang diikuti lebih dari 100 peserta terdiri dari Dosen, praktisi, masyarakat, dan mahasiswa.</p>',
            ]
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}