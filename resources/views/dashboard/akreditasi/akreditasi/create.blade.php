@extends('layouts.admin_template')
@section('title', 'akreditas')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">akreditas /</span> Add
    </h4>
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-12">
                        <div class="card-body">
                            <div class="col-lg-8">
                                <form method="POST" action="{{ route('akreditasi.store') }}" enctype="multipart/form-data" class="mt-5">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="body" class="form-label">Akreditasi</label>
                                        @error('body')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                                        <trix-editor input="body"></trix-editor>
                                    </div>

                                    <div class="mb-3">
                                        <label for="peringkat" class="form-label">Peringkat</label>
                                        @error('peringkat')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input type="text" class="form-control" id="peringkat" name="peringkat" value="{{ old('peringkat') }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status</label>
                                        @error('status')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <select class="form-select" id="status" name="status">
                                            <option value="Masih Berlaku" {{ old('status') == 'Masih Berlaku' ? 'selected' : '' }}>Masih Berlaku</option>
                                            <option value="Sudah Kedaluwarsa" {{ old('status') == 'Sudah Kedaluwarsa' ? 'selected' : '' }}>Sudah Kedaluwarsa</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="lembaga_akreditasi" class="form-label">Lembaga Akreditasi</label>
                                        @error('lembaga_akreditasi')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input type="text" class="form-control" id="lembaga_akreditasi" name="lembaga_akreditasi" value="{{ old('lembaga_akreditasi') }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="filedata" class="form-label">Upload Dokumen Akreditasi (PDF only)</label>
                                        <div id="pdf-preview" class="my-3 d-none">
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
                                        <input type="submit" value="Tambah" id="save" name="save"
                                            class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>
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
        }
    }
</script>
@endsection