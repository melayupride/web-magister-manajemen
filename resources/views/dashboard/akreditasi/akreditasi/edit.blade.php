@extends('layouts.admin_template')
@section('title', 'akreditasi')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Edit Data Akreditasi</h4>

    <div class="row">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if ($message = Session::get('failed'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Edit Dokumen Akreditasi</h5>
                <div class="card-body">
                    <div class="col-lg-12">
                        <form method="POST" action="{{ route('akreditasi.update', $akreditasi->id) }}" class="mt-5"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="mb-3">
                                <label for="body" class="form-label">Akreditasi</label>
                                @error('body')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input id="body" type="hidden" name="body"
                                    value="{{ old('body', $akreditasi->body) }}">
                                <trix-editor input="body"></trix-editor>
                            </div>
                            
                            <div class="mb-3">
                                <label for="peringkat" class="form-label">Peringkat</label>
                                @error('peringkat')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input type="text" class="form-control" id="peringkat" name="peringkat" 
                                    value="{{ old('peringkat', $akreditasi->peringkat) }}">
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                @error('status')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <select class="form-select" id="status" name="status">
                                    <option value="Masih Berlaku" {{ old('status', $akreditasi->status) == 'Masih Berlaku' ? 'selected' : '' }}>Masih Berlaku</option>
                                    <option value="Sudah Kedaluwarsa" {{ old('status', $akreditasi->status) == 'Sudah Kedaluwarsa' ? 'selected' : '' }}>Sudah Kedaluwarsa</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="lembaga_akreditasi" class="form-label">Lembaga Akreditasi</label>
                                @error('lembaga_akreditasi')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input type="text" class="form-control" id="lembaga_akreditasi" name="lembaga_akreditasi" 
                                    value="{{ old('lembaga_akreditasi', $akreditasi->lembaga_akreditasi) }}">
                            </div>

                            <div class="mb-3">
                                <label for="filedata" class="form-label">File Akreditasi (PDF only)</label>
                                <input type="hidden" name="oldFile" value="{{ $akreditasi->filedata }}">
                                @if ($akreditasi->filedata)
                                <div id="current-pdf" class="my-3">
                                    <p>File Saat Ini:</p>
                                    <embed src="{{ asset('storage/' . $akreditasi->filedata) }}" width="100%" height="500px" type="application/pdf">
                                    <div class="mt-2">
                                        <a href="{{ asset('storage/' . $akreditasi->filedata) }}" target="_blank" class="btn btn-sm btn-info">Lihat PDF Lengkap</a>
                                    </div>
                                </div>
                                @endif
                                <div id="pdf-preview" class="my-3 d-none">
                                    <p>Pratinjau File Baru:</p>
                                    <embed id="pdf-embed" src="" width="100%" height="500px" type="application/pdf">
                                </div>
                                <input class="form-control @error('filedata') is-invalid @enderror" type="file"
                                    id="filedata" name="filedata" accept="application/pdf"
                                    onchange="previewPDF()">
                                @error('filedata')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mt-3">
                                <input type="submit" value="Perbarui" id="save" name="save" class="btn btn-primary">
                                <a href="{{ route('akreditasi.index') }}" class="btn btn-secondary">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    });

    function previewPDF() {
        const fileInput = document.querySelector('#filedata');
        const pdfPreview = document.querySelector('#pdf-preview');
        const pdfEmbed = document.querySelector('#pdf-embed');
        const currentPdf = document.querySelector('#current-pdf');
        
        if (fileInput.files && fileInput.files[0]) {
            const file = fileInput.files[0];
            
            // Check if file is PDF
            if (file.type !== 'application/pdf') {
                alert('Hanya file PDF yang diperbolehkan');
                fileInput.value = '';
                return;
            }
            
            const fileURL = URL.createObjectURL(file);
            pdfEmbed.src = fileURL;
            pdfPreview.classList.remove('d-none');
            
            // Hide current PDF preview when new file is selected
            if (currentPdf) {
                currentPdf.classList.add('d-none');
            }
        }
    }
</script>
@endsection