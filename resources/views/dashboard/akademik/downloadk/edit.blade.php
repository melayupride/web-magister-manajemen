@extends('layouts.admin_template')
@section('title', 'Download Akademik')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms Download Akademik /</span> Edit Data</h4>

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
                <h5 class="card-header">Edit Dokumen Download Akademik</h5>
                <div class="card-body">
                    <div class="col-lg-12">
                        <form method="POST" action="{{ route('downloadakademik.update', $downloadk->id) }}" class="mt-5"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                                <label for="body" class="form-label">Konten Download Akademik</label>
                                @error('body')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input id="body" type="hidden" name="body"
                                    value="{{ old('body', $downloadk->body) }}">
                                <trix-editor input="body"></trix-editor>
                            </div>

                            <div class="mb-3">
                                <label for="filedata" class="form-label">File Download Akademik (PDF only)</label>
                                <input type="hidden" name="oldFile" value="{{ $downloadk->filedata }}">
                                @if ($downloadk->filedata)
                                <div id="current-pdf" class="my-3">
                                    <p>File Saat Ini:</p>
                                    <embed src="{{ asset('storage/' . $downloadk->filedata) }}" width="100%" height="500px" type="application/pdf">
                                    <div class="mt-2">
                                        <a href="{{ asset('storage/' . $downloadk->filedata) }}" target="_blank" class="btn btn-sm btn-info">Lihat PDF Lengkap</a>
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
                                <a href="{{ route('downloadakademik.index') }}" class="btn btn-secondary">Batal</a>
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