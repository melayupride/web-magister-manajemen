<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Post;
use App\Models\User;
use App\Models\Produk;
use App\Models\Kunjungan;
use App\Models\Category;
use App\Models\Pemakaian;
use Illuminate\Http\Request;
use App\Models\Logokerjasama;
use App\Models\Visitor;
use Illuminate\Support\Facades\Cache;
use Jenssegers\Agent\Agent;
use Stevebauman\Location\Facades\Location;

class PostController extends Controller
{

    public function index(Request $request)
    {
        // Deteksi informasi pengunjung
        $agent = new Agent();
        $location = $this->getLocationData($request->ip());
        
        // Rekam kunjungan pengunjung
        Kunjungan::create([
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'referrer' => $request->header('referer'),
            'page_url' => $request->fullUrl(),
            'visit_time' => now('Asia/Jakarta'),
            'device_type' => $this->getDeviceType($agent),
            'browser' => $agent->browser(),
            'os' => $agent->platform(),
            'country' => $location['country'] ?? null,
            'city' => $location['city'] ?? null
        ]);

        Visitor::create([
            'ip_address' => $request->ip(),
        ]);

        // Hitung statistik kunjungan
        $today = now('Asia/Jakarta')->startOfDay();
        $visitorStats = [
            'today' => Kunjungan::whereDate('visit_time', $today)->count(),
            'week' => Kunjungan::whereBetween('visit_time', [
                now('Asia/Jakarta')->startOfWeek(), 
                now('Asia/Jakarta')->endOfWeek()
            ])->count(),
            'month' => Kunjungan::whereMonth('visit_time', now('Asia/Jakarta')->month)
                ->whereYear('visit_time', now('Asia/Jakarta')->year)
                ->count(),
            'year' => Kunjungan::whereYear('visit_time', now('Asia/Jakarta')->year)->count(),
            'total' => Kunjungan::count()
        ];

        $pakai = Pemakaian::latest()->limit(5)->get();
        $dataList = Post::latest()->limit(3)->get();
        $dataProduk = Produk::latest()->limit(6)->get();
        $logo = Logokerjasama::all();

        return view('home.Blog', compact('pakai', 'dataList', 'dataProduk', 'visitorStats', 'logo'));
    }

    private function getDeviceType($agent)
    {
        if ($agent->isRobot()) {
            return 'bot';
        } elseif ($agent->isMobile()) {
            return 'mobile';
        } elseif ($agent->isTablet()) {
            return 'tablet';
        } else {
            return 'desktop';
        }
    }

    private function getLocationData($ip)
    {
        // Untuk development (IP localhost)
        if ($ip === '127.0.0.1') {
            return [
                'country' => 'Indonesia',
                'city' => 'Jakarta'
            ];
        }

        // Menggunakan package stevebauman/location
        if (class_exists('Stevebauman\Location\Facades\Location')) {
            $location = Location::get($ip);
            
            if ($location) {
                return [
                    'country' => $location->countryName,
                    'city' => $location->cityName
                ];
            }
        }

        return [
            'country' => null,
            'city' => null
        ];
    }


    public function show($id)
    {
        try {
            $post = Post::findOrFail($id);
            $silderpost = Post::latest()->take(6)->get();
            return view('home.SigleBlog', compact('post', 'silderpost'));
        } catch (Exception $e) {
            return view('home.notfound');
        }
    }

    public function blogpost(Request $request)
    {
        $menuBlog = 'active';
        $keyword = $request->input('keyword');

        $dataitem = Post::latest()
            ->where('title', 'LIKE', '%' . $keyword . '%')
            ->orWhere('body', 'LIKE', '%' . $keyword . '%')
            ->paginate(6);

        return view('home.home-blog', compact('dataitem', 'menuBlog'));
    }


    // public function blogpost()
    // {
    //     $menuBlog = 'active';
    //     $dataitem = Post::latest()->paginate(6);
    //     return view('home.home-blog', compact('dataitem', 'menuBlog'));
    // }
}
