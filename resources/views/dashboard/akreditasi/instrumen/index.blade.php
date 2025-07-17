@extends('layouts.admin_template')
@section('title', 'Instrumen Akreditasi')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Data Instrumen Akreditasi /</span> List
    </h4>
    <div class="row mt-3">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-12">
                        <div class="card-body">
                            @include('notif')
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title text-primary">List Data</h5>

                                <a href="{{ route('instrumenakred.create') }}">
                                    <button class="btn btn-primary">Tambah</button>
                                </a>
                            </div>
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Link</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($instrumen as $item)
                                <tr>
                                    <td>{{ $loop->iteration + ($instrumen->currentPage() - 1) * $instrumen->perPage() }}</td>
                                    <td>
                                        <div class="text-truncate" style="max-width: 300px;">
                                            {!! Str::limit(strip_tags($item->body), 100) !!}
                                        </div>
                                    </td>
                                    <td>
                                        @if($item->link)
                                            <a href="{{ $item->link }}" target="_blank" rel="noopener noreferrer">
                                                {{ $item->link }}
                                            </a>
                                        @else
                                            -
                                        @endif
                                    </td>
                        
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="{{ route('instrumenakred.edit', $item->id) }}" class="btn btn-sm btn-warning" title="Edit">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <form action="{{ route('instrumenakred.destroy', $item->id) }}" method="POST" class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">
                                                    <i class="bi bi-trash-fill"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{ $instrumen->withQueryString()->links() }}
    </div>
</div>
@endsection