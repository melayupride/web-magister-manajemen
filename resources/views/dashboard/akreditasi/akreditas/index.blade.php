@extends('layouts.admin_template')
@section('title', 'Akreditasi')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Data Akreditasi /</span> Daftar
    </h4>
    <div class="row mt-3">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-12">
                        <div class="card-body">
                            @include('notif')
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="card-title text-primary">Daftar Data</h5>
                                <a href="{{ route('akreditas.create') }}" class="btn btn-primary">
                                    <i class="bi bi-plus-circle"></i> Tambah
                                </a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Judul</th>
                                            <th scope="col">Akreditasi</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($akreditas as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->body }}</td>
                                            <td>
                                                <img src="{{ asset('storage/' . $item->image) }}" alt="Gambar Akreditasi" class="img-thumbnail" width="150">
                                            </td>
                                            <td><article>{!! Str::limit($item->description, 50) !!}</article></td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <a href="{{ route('akreditas.edit', $item->id) }}" class="btn btn-sm btn-warning" title="Edit">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </a>
                                                    <form action="{{ route('akreditas.destroy', $item->id) }}" method="POST" class="d-inline">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')" title="Hapus">
                                                            <i class="bi bi-x-circle-fill"></i>
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
        </div>
    </div>
</div>
@endsection