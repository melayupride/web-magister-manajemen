<?php

namespace App\Http\Controllers;

use App\Models\Kunjungan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Response;

class adminVisitorController extends Controller
{
    public function index()
    {
        $defaultData = $this->getVisitorData();
        $filters = $this->getAvailableFilters();
        $menuVisitor = 'active';
        
        return view('dashboard.visitor.index', [
            'stats' => $defaultData,
            'filters' => $filters,
            'menuVisitor' => $menuVisitor,
            'activeFilters' => [
                'time_range' => 'month',
                'device_type' => null,
                'browser' => null,
                'os' => null,
                'country' => null
            ]
        ]);
    }

    public function filter(Request $request)
    {
        $filteredData = $this->getVisitorData($request->all());
        $filters = $this->getAvailableFilters($request->all());
        $menuVisitor = 'active';
        
        return view('dashboard.visitor.index', [
            'menuVisitor' => $menuVisitor,
            'stats' => $filteredData,
            'filters' => $filters,
            'activeFilters' => $request->all()
        ]);
    }

    public function downloadChart($type)
    {
        $data = $this->getVisitorData();
        
        if ($type === 'png') {
            // In a real implementation, you would generate chart images
            return response()->json(['message' => 'PNG download would be implemented here']);
        } elseif ($type === 'csv') {
            $csvData = $this->generateCsvData($data);
            
            return Response::make($csvData, 200, [
                'Content-Type' => 'text/csv',
                'Content-Disposition' => 'attachment; filename="visitor_stats.csv"',
            ]);
        }
    }
    
    public function downloadMetadata()
    {
        $data = Kunjungan::all();
        $csvData = $this->generateMetadataCsv($data);
        
        return Response::make($csvData, 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="visitor_metadata.csv"',
        ]);
    }

    private function getVisitorData($filters = [])
    {
        $query = Kunjungan::query();
        
        // Apply time range filter
        if (!empty($filters['time_range'])) {
            switch ($filters['time_range']) {
                case 'today':
                    $query->whereDate('visit_time', Carbon::today());
                    break;
                case 'week':
                    $query->whereBetween('visit_time', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
                    break;
                case 'month':
                    $query->whereMonth('visit_time', Carbon::now()->month)
                          ->whereYear('visit_time', Carbon::now()->year);
                    break;
                case 'year':
                    $query->whereYear('visit_time', Carbon::now()->year);
                    break;
            }
        }
        
        // Apply other filters
        foreach (['device_type', 'browser', 'os', 'country'] as $filter) {
            if (!empty($filters[$filter])) {
                $query->where($filter, $filters[$filter]);
            }
        }
        
        // Get data for charts
        $totalVisits = $query->count();
        
        $byDevice = $query->clone()
            ->selectRaw('device_type, count(*) as count')
            ->groupBy('device_type')
            ->get()
            ->pluck('count', 'device_type');
            
        $byBrowser = $query->clone()
            ->selectRaw('browser, count(*) as count')
            ->groupBy('browser')
            ->get()
            ->pluck('count', 'browser');
            
        $byOS = $query->clone()
            ->selectRaw('os, count(*) as count')
            ->groupBy('os')
            ->get()
            ->pluck('count', 'os');
            
        $byCountry = $query->clone()
            ->selectRaw('country, count(*) as count')
            ->groupBy('country')
            ->get()
            ->pluck('count', 'country');
            
        $timeSeries = $query->clone()
            ->selectRaw('DATE(visit_time) as date, count(*) as count')
            ->groupBy('date')
            ->orderBy('date')
            ->get();
            
        return [
            'total_visits' => $totalVisits,
            'by_device' => $byDevice,
            'by_browser' => $byBrowser,
            'by_os' => $byOS,
            'by_country' => $byCountry,
            'time_series' => $timeSeries
        ];
    }
    
    private function getAvailableFilters($filters = [])
    {
        $query = Kunjungan::query();
        
        // Apply the same filters to filter options
        if (!empty($filters['time_range'])) {
            switch ($filters['time_range']) {
                case 'today':
                    $query->whereDate('visit_time', Carbon::today());
                    break;
                case 'week':
                    $query->whereBetween('visit_time', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
                    break;
                case 'month':
                    $query->whereMonth('visit_time', Carbon::now()->month)
                          ->whereYear('visit_time', Carbon::now()->year);
                    break;
                case 'year':
                    $query->whereYear('visit_time', Carbon::now()->year);
                    break;
            }
        }
        
        return [
            'device_types' => $query->clone()->select('device_type')->distinct()->pluck('device_type'),
            'browsers' => $query->clone()->select('browser')->distinct()->pluck('browser'),
            'oses' => $query->clone()->select('os')->distinct()->pluck('os'),
            'countries' => $query->clone()->select('country')->distinct()->pluck('country')
        ];
    }
    
    private function generateCsvData($data)
    {
        $output = fopen('php://temp', 'w');
        
        // Header
        fputcsv($output, ['Metric', 'Value']);
        
        // Total visits
        fputcsv($output, ['Total Visits', $data['total_visits']]);
        fputcsv($output, []);
        
        // By device
        fputcsv($output, ['Device Type', 'Count']);
        foreach ($data['by_device'] as $device => $count) {
            fputcsv($output, [$device, $count]);
        }
        fputcsv($output, []);
        
        // By browser
        fputcsv($output, ['Browser', 'Count']);
        foreach ($data['by_browser'] as $browser => $count) {
            fputcsv($output, [$browser, $count]);
        }
        fputcsv($output, []);
        
        // By OS
        fputcsv($output, ['Operating System', 'Count']);
        foreach ($data['by_os'] as $os => $count) {
            fputcsv($output, [$os, $count]);
        }
        fputcsv($output, []);
        
        // By country
        fputcsv($output, ['Country', 'Count']);
        foreach ($data['by_country'] as $country => $count) {
            fputcsv($output, [$country, $count]);
        }
        
        rewind($output);
        $csv = stream_get_contents($output);
        fclose($output);
        
        return $csv;
    }
    
    private function generateMetadataCsv($data)
    {
        $output = fopen('php://temp', 'w');
        
        // Header
        fputcsv($output, ['ID', 'Visit Time', 'Device Type', 'Browser', 'OS', 'Country', 'IP Address']);
        
        // Data rows
        foreach ($data as $row) {
            fputcsv($output, [
                $row->id,
                $row->visit_time,
                $row->device_type,
                $row->browser,
                $row->os,
                $row->country,
                $row->ip_address
            ]);
        }
        
        rewind($output);
        $csv = stream_get_contents($output);
        fclose($output);
        
        return $csv;
    }
}