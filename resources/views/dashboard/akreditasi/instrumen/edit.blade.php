@extends('layouts.admin_template')
@section('title', 'Instrumen Akreditasi')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Edit Data Instrumen Akreditasi</h4>

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
                <h5 class="card-header">Edit Instrumen Akreditasi</h5>
                <div class="card-body">
                    <div class="col-lg-12">
                        <form method="POST" action="{{ route('instrumenakred.update', $instrumen->id) }}" class="mt-5"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="mb-3">
                                <label for="body" class="form-label">Instrumen</label>
                                @error('body')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input id="body" type="hidden" name="body"
                                    value="{{ old('body', $instrumen->body) }}">
                                <trix-editor input="body"></trix-editor>
                            </div>
                            
                            <div class="mb-3">
                                <label for="peringkat" class="form-label">Link (Form)</label>
                                @error('link')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input type="text" class="form-control" id="link" name="link" 
                                    value="{{ old('link', $instrumen->link) }}">
                            </div>

                            <div class="mt-3">
                                <input type="submit" value="Perbarui" id="save" name="save" class="btn btn-primary">
                                <a href="{{ route('instrumenakred.index') }}" class="btn btn-secondary">Batal</a>
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