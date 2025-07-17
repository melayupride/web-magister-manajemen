@extends('welcome')

@section('title', 'Instrumen Akreditasi')

@section('content')

<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mt-3 mb-4">
                  <span style="color: #008374">Instrumen Akreditasi</span>
            </h2>
            <div class="card elegant-shadow">
                <div class="card-header bg-gradient-primary text-white mt-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">
                        </h3>
                        <div class="search-container">
                            <form action="{{ url('/instrumen-akreditasi') }}" method="GET" class="search-form">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control search-input" 
                                           placeholder="Cari instrumen..." value="{{ request('search') }}">
                                    <div class="input-group-append">
                                        <button class="btn btn-search" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                        @if(request('search'))
                                        <a href="{{ url('/instrumen-akreditasi') }}" class="btn btn-reset">
                                            <i class="fas fa-times"></i>
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card-body p-0 ">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped ">
                            <thead class="bg-light-primary">
                                <tr>
                                    <th class="py-3 px-4" width="75%">
                                        <i class="fas fa-heading mr-2"></i>Judul
                                    </th>
                                    <th class="py-3 px-4 text-center" width="25%">
                                        <i class="fas fa-link mr-2"></i>Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($instrumen as $item)
                                <tr class="instrumen-row">
                                    <td class="py-3 px-4 align-middle">
                                        <div class="instrumen-title font-weight-medium">
                                            <i class="fas fa-file-alt text-muted mr-2"></i>
                                            {!! $item->body !!}
                                        </div>
                                    </td>
                                    <td class="py-3 px-4 align-middle text-center">
                                        <a href="{{ $item->link }}" target="_blank" class="btn btn-sm btn-action">
                                            <i class="fas fa-external-link-alt mr-1"></i> Buka Link
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="2" class="text-center py-5">
                                        <div class="empty-state">
                                            <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                                            <h5 class="text-muted">Tidak ada data instrumen ditemukan</h5>
                                            @if(request('search'))
                                            <a href="{{ url('/instrumen-akreditasi') }}" class="btn btn-primary mt-3">
                                                <i class="fas fa-undo mr-1"></i> Reset Pencarian
                                            </a>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                            <div class="card-footer bg-white border-top-0 pt-3 pb-3">
                    <nav aria-label="Page navigation">
                        {{ $instrumen->withQueryString()->onEachSide(1)->links() }}
                    </nav>
                </div>
        </div>
    </div>
</div>

<style>
    /* Main Colors */
    :root {
        --primary-color: #008374;
        --primary-light: rgba(0, 131, 116, 0.1);
        --primary-dark: #00695c;
        --secondary-color: #f8f9fa;
        --text-color: #495057;
    }

    /* Card Styling */
    .elegant-shadow {
        border: none;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        transition: transform 0.3s ease;
    }

    .elegant-shadow:hover {
        transform: translateY(-2px);
    }

    /* Card Header */
    .bg-gradient-primary {
        background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
        border-bottom: none;
    }

    .card-header h3 {
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    /* Search Styling */
    .search-container {
        width: 300px;
    }

    .search-form {
        position: relative;
    }

    .search-input {
        border-radius: 20px !important;
        border: 1px solid #e0e0e0;
        padding-left: 20px;
        height: 40px;
        box-shadow: none;
        transition: all 0.3s;
    }

    .search-input:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 0.2rem rgba(0, 131, 116, 0.25);
    }

    .btn-search {
        background-color: var(--primary-color);
        color: white;
        border-radius: 0 20px 20px 0 !important;
        border: none;
        padding: 0 15px;
        transition: all 0.3s;
    }

    .btn-search:hover {
        background-color: var(--primary-dark);
    }

    .btn-reset {
        background-color: #f8f9fa;
        color: var(--text-color);
        border: 1px solid #e0e0e0;
        border-left: none;
        padding: 0 15px;
        transition: all 0.3s;
    }

    .btn-reset:hover {
        background-color: #e9ecef;
    }

    /* Table Styling */
    .bg-light-primary {
        background-color: var(--primary-light) !important;
    }

    .table {
        margin-bottom: 0;
    }

    .table th {
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.8rem;
        letter-spacing: 0.5px;
        color: var(--primary-dark);
    }

    .instrumen-row:hover {
        background-color: var(--primary-light) !important;
    }

    .instrumen-title {
        color: var(--text-color);
        transition: color 0.3s;
    }

    .instrumen-row:hover .instrumen-title {
        color: var(--primary-dark);
    }

    /* Button Styling */
    .btn-action {
        background-color: white;
        color: var(--primary-color);
        border: 1px solid var(--primary-color);
        border-radius: 20px;
        padding: 5px 15px;
        transition: all 0.3s;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
    }

    .btn-action:hover {
        background-color: var(--primary-color);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(0, 131, 116, 0.2);
    }

    /* Pagination Styling */
    .pagination {
        justify-content: center;
    }

    .page-item .page-link {
        color: var(--primary-color);
        border: 1px solid #dee2e6;
        margin: 0 3px;
        border-radius: 8px !important;
        min-width: 40px;
        text-align: center;
        transition: all 0.3s;
    }

    .page-item.active .page-link {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
        color: white;
    }

    .page-item:not(.active) .page-link:hover {
        background-color: var(--primary-light);
        border-color: var(--primary-light);
    }

    /* Empty State Styling */
    .empty-state {
        padding: 40px 0;
    }

    /* Responsive Adjustments */
    @media (max-width: 992px) {
        .card-header {
            flex-direction: column;
            align-items: flex-start !important;
        }
        
        .search-container {
            width: 100%;
            margin-top: 15px;
        }
        
        .table th, .table td {
            padding: 12px 8px;
        }
    }

    @media (max-width: 576px) {
        .table-responsive {
            border-radius: 0;
        }
        
        .table thead {
            display: none;
        }
        
        .table tr {
            display: block;
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        
        .table td {
            display: block;
            text-align: right;
            padding-left: 50%;
            position: relative;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .table td:before {
            content: attr(data-label);
            position: absolute;
            left: 20px;
            width: calc(50% - 20px);
            padding-right: 10px;
            text-align: left;
            font-weight: 600;
            color: var(--primary-color);
        }
        
        .table td:last-child {
            border-bottom: 0;
        }
        
        .table td[data-label="Judul Instrumen"] {
            text-align: left;
            padding: 15px 20px;
        }
        
        .table td[data-label="Aksi"] {
            text-align: center;
            padding: 0 20px 15px;
        }
        
        .table td[data-label="Aksi"]:before {
            display: none;
        }
    }
</style>

<script>
    // Add data-label attributes for mobile view
    document.addEventListener('DOMContentLoaded', function() {
        const ths = document.querySelectorAll('thead th');
        const tds = document.querySelectorAll('tbody td');
        
        tds.forEach((td, index) => {
            const thIndex = index % ths.length;
            const label = ths[thIndex].textContent.trim();
            td.setAttribute('data-label', label);
        });
    });
</script>

@endsection