<?php

namespace Database\Seeders;

use App\Models\CategoryProduk;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil user pertama (asumsi sudah ada dari UserSeeder)
        $user = User::first(); 
        
        // Ambil 2 kategori pertama (asumsi sudah ada dari CategorySeeder)
        $categories = CategoryProduk::take(3)->get(); 
        $posts = [
            [
                'category_produk_id' => $categories[0]->id,
                'user_id' => $user->id,
                'title' => 'Ruang Dosen',
                'image' => 'images/sV68mRUOcRFKm4DOBcRUP1eN4jFQydNExYdhUa46.jpg',
            ],
            [
                'category_produk_id' => $categories[1]->id,
                'user_id' => $user->id,
                'title' => 'Ruang Rapat',
                'image' => 'images/kq2ZRd5S0INHliaoDWE3zjR19o6HuARlVxztQU3W.jpg',
            ],
            [
                'category_produk_id' => $categories[1]->id,
                'user_id' => $user->id,
                'title' => 'Ruang Kelas',
                'image' => 'images/ev9jOAxpPdT86WjKJ72BAU4F6CC5ReskT8N5hLL7.jpg',
            ]
        ];

        foreach ($posts as $post) {
            Produk::create($post);
        }

    }
}
