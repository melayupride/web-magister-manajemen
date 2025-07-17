<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kunjungan;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KunjunganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userAgents = [
            'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36',
            'Mozilla/5.0 (iPhone; CPU iPhone OS 14_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0 Mobile/15E148 Safari/604.1',
            'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36',
            'Mozilla/5.0 (Linux; Android 10; SM-A505FN) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.120 Mobile Safari/537.36',
            'Mozilla/5.0 (iPad; CPU OS 14_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0 Mobile/15E148 Safari/604.1'
        ];

        $referrers = [
            'https://www.google.com',
            'https://www.facebook.com',
            'https://twitter.com',
            'https://www.linkedin.com',
            'https://www.youtube.com',
            null
        ];

        $countries = ['Indonesia', 'Malaysia', 'Singapore', 'Japan', 'USA', 'UK', 'Australia'];
        $cities = ['Jakarta', 'Bandung', 'Kuala Lumpur', 'Singapore', 'Tokyo', 'New York', 'London', 'Sydney'];

        $kunjunganData = [];

        for ($i = 0; $i < 20; $i++) {
            $randomDays = rand(0, 30);
            $randomHours = rand(0, 23);
            $randomMinutes = rand(0, 59);
            
            $kunjunganData[] = [
                'ip_address' => '192.168.' . rand(0, 255) . '.' . rand(0, 255),
                'user_agent' => $userAgents[array_rand($userAgents)],
                'referrer' => $referrers[array_rand($referrers)],
                'page_url' => 'https://example.com/' . ['home', 'about', 'contact', 'blog', 'products'][array_rand(['home', 'about', 'contact', 'blog', 'products'])],
                'visit_time' => Carbon::now()->subDays($randomDays)->subHours($randomHours)->subMinutes($randomMinutes),
                'device_type' => ['mobile', 'desktop', 'tablet', 'bot'][rand(0, 3)],
                'browser' => ['Chrome', 'Firefox', 'Safari', 'Edge'][rand(0, 3)],
                'os' => ['Windows', 'macOS', 'Linux', 'iOS', 'Android'][rand(0, 4)],
                'country' => $countries[array_rand($countries)],
                'city' => $cities[array_rand($cities)],
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        Kunjungan::insert($kunjunganData);
    }
}