@extends('layouts.admin_template')
@section('title', 'Detail Akreditasi')
@section('content')
<div class="container">
    <div class="row mb-5">
        <div class="col-lg-11">
            <a href="{{ route('akreditasi.index') }}" class="btn btn-success btn-sm mt-5">
                <i class="bi bi-arrow-left"></i> Back to my post
            </a>

            <div class="card mt-4">
                <div class="card-header">
                    <h4 class="card-title">Detail Akreditasi</h4>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <h6 class="text-muted">Peringkat</h6>
                            <p class="fs-5">{{ $akreditasi->peringkat ?? '-' }}</p>
                        </div>
                        <div class="col-md-4">
                            <h6 class="text-muted">Status</h6>
                            <p class="fs-5">
                                @if($akreditasi->status == 'Masih Berlaku')
                                    <span class="badge bg-success">{{ $akreditasi->status }}</span>
                                @else
                                    <span class="badge bg-warning text-dark">{{ $akreditasi->status }}</span>
                                @endif
                            </p>
                        </div>
                        <div class="col-md-4">
                            <h6 class="text-muted">Lembaga Akreditasi</h6>
                            <p class="fs-5">{{ $akreditasi->lembaga_akreditasi ?? '-' }}</p>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h6 class="text-muted">Konten Akreditasi</h6>
                        <article class="border p-3 rounded bg-light">
                            {!! $akreditasi->body !!}
                        </article>
                    </div>

                    <div class="mt-4">
                        <h6 class="text-muted">Dokumen Akreditasi</h6>
                        @if($akreditasi->filedata)
                            <div class="border p-3 rounded bg-light">
                                <embed class="embed-responsive-item" 
                                    src="{{ asset('storage/' . $akreditasi->filedata) }}" 
                                    width="100%" 
                                    height="500px">
                                </embed>
                                <div class="mt-3">
                                    <a href="{{ asset('storage/' . $akreditasi->filedata) }}" 
                                       target="_blank" 
                                       class="btn btn-primary btn-sm">
                                        <i class="bi bi-download"></i> Download Dokumen
                                    </a>
                                </div>
                            </div>
                        @else
                            <p class="text-muted">Tidak ada dokumen terlampir</p>
                        @endif
                    </div>
                </div>
                <div class="card-footer text-end">
                    <small class="text-muted">Terakhir diperbarui: {{ $akreditasi->updated_at->format('d F Y H:i') }}</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection