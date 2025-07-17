@extends('layouts.admin_template')
@section('title', 'Visitor Statistics')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Statistics /</span> Visitor Analytics
        </h4>

        <!-- Filter Section -->
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ route('visitor.stats.filter') }}" method="GET">
                    <div class="row">
                        <div class="col-md-2">
                            <label class="form-label">Time Range</label>
                            <select name="time_range" class="form-select">
                                <option value="today" {{ $activeFilters['time_range'] == 'today' ? 'selected' : '' }}>Today</option>
                                <option value="week" {{ $activeFilters['time_range'] == 'week' ? 'selected' : '' }}>This Week</option>
                                <option value="month" {{ $activeFilters['time_range'] == 'month' ? 'selected' : '' }}>This Month</option>
                                <option value="year" {{ $activeFilters['time_range'] == 'year' ? 'selected' : '' }}>This Year</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Device Type</label>
                            <select name="device_type" class="form-select">
                                <option value="">All Devices</option>
                                @foreach($filters['device_types'] as $device)
                                    <option value="{{ $device }}" {{ $activeFilters['device_type'] == $device ? 'selected' : '' }}>{{ $device }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Browser</label>
                            <select name="browser" class="form-select">
                                <option value="">All Browsers</option>
                                @foreach($filters['browsers'] as $browser)
                                    <option value="{{ $browser }}" {{ $activeFilters['browser'] == $browser ? 'selected' : '' }}>{{ $browser }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">OS</label>
                            <select name="os" class="form-select">
                                <option value="">All OS</option>
                                @foreach($filters['oses'] as $os)
                                    <option value="{{ $os }}" {{ $activeFilters['os'] == $os ? 'selected' : '' }}>{{ $os }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Country</label>
                            <select name="country" class="form-select">
                                <option value="">All Countries</option>
                                @foreach($filters['countries'] as $country)
                                    <option value="{{ $country }}" {{ $activeFilters['country'] == $country ? 'selected' : '' }}>{{ $country }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button type="submit" class="btn btn-primary">Apply Filters</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Summary Cards -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Total Visits</h5>
                        <h2 class="text-primary">{{ number_format($stats['total_visits']) }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Devices</h5>
                        <h2 class="text-success">{{ count($stats['by_device']) }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Browsers</h5>
                        <h2 class="text-info">{{ count($stats['by_browser']) }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Countries</h5>
                        <h2 class="text-warning">{{ count($stats['by_country']) }}</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Download Buttons -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Export Data</h5>
                        <div>
                            <button id="downloadPngAll" class="btn btn-outline-primary me-2">
                                <i class="bx bx-download"></i> Download All Charts as PNG
                            </button>
                            <button id="downloadCsv" class="btn btn-outline-success me-2">
                                <i class="bx bx-download"></i> Download Stats as CSV
                            </button>
                            <button id="downloadMetadata" class="btn btn-outline-secondary">
                                <i class="bx bx-download"></i> Download Full Dataset
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts Section -->
        <div class="row">
            <!-- Bar Chart - Devices -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>Visits by Device</h5>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="downloadChart('deviceBarChart')">Download PNG</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-container" style="height: 250px;">
                            <canvas id="deviceBarChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pie Chart - Browsers -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>Visits by Browser</h5>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="downloadChart('browserPieChart')">Download PNG</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-container" style="height: 250px;">
                            <canvas id="browserPieChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Line Chart - Time Series -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>Visits Over Time</h5>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="downloadChart('timeLineChart')">Download PNG</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-container" style="height: 250px;">
                            <canvas id="timeLineChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doughnut Chart - OS -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>Visits by Operating System</h5>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="downloadChart('osDoughnutChart')">Download PNG</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-container" style="height: 250px;">
                            <canvas id="osDoughnutChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Polar Area Chart - Countries -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>Visits by Country</h5>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="downloadChart('countryPolarChart')">Download PNG</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-container" style="height: 250px;">
                            <canvas id="countryPolarChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Radar Chart - All Metrics -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>Visitor Metrics Radar</h5>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="downloadChart('metricsRadarChart')">Download PNG</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-container" style="height: 250px;">
                            <canvas id="metricsRadarChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .card {
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
            transition: all 0.3s ease;
            border-radius: 0.35rem;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0.5rem 2rem 0 rgba(58, 59, 69, 0.2);
        }

        .card-header {
            background-color: #f8f9fc;
            border-bottom: 1px solid #e3e6f0;
            padding: 1rem 1.35rem;
            border-radius: 0.35rem 0.35rem 0 0 !important;
        }

        .chart-container {
            position: relative;
            height: 250px;
            width: 100%;
        }
        
        .dropdown-menu {
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
            border: none;
        }
        
        .dropdown-item:hover {
            background-color: #f8f9fc;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
    <script>
        // Colors for charts
        const chartColors = [
            '#4e73df', '#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b', 
            '#5a5c69', '#858796', '#3a3b45', '#2e59d9', '#17a673',
            '#2c9faf', '#dda20a', '#be2617', '#6c757d', '#343a40'
        ];

        // Initialize all charts
        let charts = {};
        
        // Device Bar Chart
        const deviceCtx = document.getElementById('deviceBarChart');
        charts.deviceBarChart = new Chart(deviceCtx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($stats['by_device']->keys()) !!},
                datasets: [{
                    label: 'Visits by Device',
                    data: {!! json_encode($stats['by_device']->values()) !!},
                    backgroundColor: chartColors.slice(0, {{ count($stats['by_device']) }}),
                    borderColor: '#fff',
                    borderWidth: 1,
                    borderRadius: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        enabled: true,
                        mode: 'index',
                        intersect: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            display: true,
                            drawBorder: false
                        },
                        ticks: {
                            stepSize: 1
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });

        // Browser Pie Chart
        const browserCtx = document.getElementById('browserPieChart');
        charts.browserPieChart = new Chart(browserCtx, {
            type: 'pie',
            data: {
                labels: {!! json_encode($stats['by_browser']->keys()) !!},
                datasets: [{
                    data: {!! json_encode($stats['by_browser']->values()) !!},
                    backgroundColor: chartColors.slice(0, {{ count($stats['by_browser']) }}),
                    borderColor: '#fff',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'right',
                        labels: {
                            boxWidth: 10,
                            padding: 10
                        }
                    },
                    tooltip: {
                        enabled: true
                    }
                },
                cutout: '60%'
            }
        });

        // Time Series Line Chart
        const timeCtx = document.getElementById('timeLineChart');
        charts.timeLineChart = new Chart(timeCtx, {
            type: 'line',
            data: {
                labels: {!! json_encode($stats['time_series']->pluck('date')) !!},
                datasets: [{
                    label: 'Visits',
                    data: {!! json_encode($stats['time_series']->pluck('count')) !!},
                    backgroundColor: 'rgba(78, 115, 223, 0.05)',
                    borderColor: '#4e73df',
                    borderWidth: 2,
                    pointBackgroundColor: '#4e73df',
                    pointBorderColor: '#4e73df',
                    pointRadius: 3,
                    pointHoverRadius: 5,
                    tension: 0.3,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            display: true,
                            drawBorder: false
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });

        // OS Doughnut Chart
        const osCtx = document.getElementById('osDoughnutChart');
        charts.osDoughnutChart = new Chart(osCtx, {
            type: 'doughnut',
            data: {
                labels: {!! json_encode($stats['by_os']->keys()) !!},
                datasets: [{
                    data: {!! json_encode($stats['by_os']->values()) !!},
                    backgroundColor: chartColors.slice(0, {{ count($stats['by_os']) }}),
                    borderColor: '#fff',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'right',
                        labels: {
                            boxWidth: 10,
                            padding: 10
                        }
                    }
                },
                cutout: '60%'
            }
        });

        // Country Polar Area Chart
        const countryCtx = document.getElementById('countryPolarChart');
        charts.countryPolarChart = new Chart(countryCtx, {
            type: 'polarArea',
            data: {
                labels: {!! json_encode($stats['by_country']->keys()) !!},
                datasets: [{
                    data: {!! json_encode($stats['by_country']->values()) !!},
                    backgroundColor: chartColors.slice(0, {{ count($stats['by_country']) }}),
                    borderColor: '#fff',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'right',
                        labels: {
                            boxWidth: 10,
                            padding: 10
                        }
                    }
                },
                scales: {
                    r: {
                        pointLabels: {
                            display: false
                        }
                    }
                }
            }
        });

        // Metrics Radar Chart
        const radarCtx = document.getElementById('metricsRadarChart');
        charts.metricsRadarChart = new Chart(radarCtx, {
            type: 'radar',
            data: {
                labels: ['Devices', 'Browsers', 'OS', 'Countries'],
                datasets: [
                    {
                        label: 'Visitor Metrics',
                        data: [
                            {{ $stats['by_device']->sum() }},
                            {{ $stats['by_browser']->sum() }},
                            {{ $stats['by_os']->sum() }},
                            {{ $stats['by_country']->sum() }}
                        ],
                        backgroundColor: 'rgba(78, 115, 223, 0.2)',
                        borderColor: '#4e73df',
                        pointBackgroundColor: '#4e73df',
                        pointBorderColor: '#fff',
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor: '#4e73df',
                        borderWidth: 2
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    r: {
                        angleLines: {
                            display: true
                        },
                        suggestedMin: 0,
                        ticks: {
                            stepSize: 1
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        // Download functions
        document.getElementById('downloadPngAll').addEventListener('click', async function() {
            try {
                // Create a new JSZip instance
                const zip = new JSZip();
                const imgFolder = zip.folder("visitor_charts");
                
                // Add each chart to the zip file
                const chartIds = [
                    'deviceBarChart', 
                    'browserPieChart', 
                    'timeLineChart', 
                    'osDoughnutChart', 
                    'countryPolarChart', 
                    'metricsRadarChart'
                ];
                
                // Process each chart
                for (const chartId of chartIds) {
                    const chart = charts[chartId];
                    if (chart) {
                        const imageData = chart.toBase64Image('image/png', 1);
                        const base64Data = imageData.split(',')[1];
                        imgFolder.file(`${chartId}.png`, base64Data, {base64: true});
                    }
                }
                
                // Generate the zip file
                const content = await zip.generateAsync({type: "blob"});
                
                // Download the zip file
                saveAs(content, "visitor_charts.zip");
                
            } catch (error) {
                console.error('Error generating zip file:', error);
                alert('Error generating download. Please check console for details.');
            }
        });

        document.getElementById('downloadCsv').addEventListener('click', function() {
            window.location.href = "{{ route('visitor.stats.download', ['type' => 'csv']) }}";
        });

        document.getElementById('downloadMetadata').addEventListener('click', function() {
            window.location.href = "{{ route('visitor.stats.download.metadata') }}";
        });

        function downloadChart(chartId) {
            const chart = charts[chartId];
            if (!chart) {
                console.error('Chart not found:', chartId);
                return;
            }

            // Create a temporary link element
            const link = document.createElement('a');
            link.download = chartId + '.png';
            
            // Get the chart as base64 image
            link.href = chart.toBase64Image('image/png', 1);
            
            // Trigger the download
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }
    </script>
@endsection