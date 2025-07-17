@extends('welcome')

@section('title', 'Download DKPS')
@section('content')

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10 my-3">
            <h2 class="mt-3">
                Download Dokumen <br><span style="color: #008374">Kinerja Program Studi (DKPS) </span>
            </h2>
            <div class="alert alert-info mt-5">
                <i class="bi bi-info-circle-fill"></i> Klik pada nama file untuk melihat preview dokumen sebelum mendownload.
            </div>
            <br>
            <div class="table-responsive">
                <table class="table table-hover mt-0">
                    <thead>
                        <tr>
                            <th scope="col">Nama Dokumen</th>
                            <th scope="col">Download File</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($downdkps as $item)
                        <tr>
                            <td>
                                <a href="#" class="pdf-preview-link d-flex align-items-center gap-2"
                                data-pdf-url="{{ asset('storage/' . $item->filedata) }}">
                                    <i class="bi bi-file-earmark-pdf fs-4 mx-2 text-danger pdf-title"></i>
                                    <div>
                                        {!! $item->body !!}
                                        <span class="pdf-preview-hint d-block text-muted">(Klik untuk preview)</span>
                                    </div>
                                </a>
                            </td>
                            <td>
                                <a href="{{ asset('storage/' . $item->filedata) }}" download>
                                    <i class="bi bi-arrow-down-circle-fill"></i> Download
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- PDF Preview Modal -->
<div class="modal fade" id="pdfPreviewModal" tabindex="-1" aria-labelledby="pdfPreviewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pdfPreviewModalLabel">Preview Dokumen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="pdf-preview-container">
                    <iframe id="pdfPreviewFrame" src="" frameborder="0" style="width:100%; height:70vh;"></iframe>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <a id="pdfDownloadBtn" href="#" download class="btn btn-primary">
                    <i class="bi bi-download"></i> Download Dokumen
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    /* PDF Preview Link Styles */
    .pdf-preview-link {
        color: #008374;
        text-decoration: none;
        transition: all 0.3s ease;
        display: block;
    }
    
    .pdf-preview-link:hover {
        color: #005a4f;
        text-decoration: underline;
    }
    
    .pdf-preview-link .pdf-title {
        font-weight: 500;
    }
    
    .pdf-preview-link .pdf-preview-hint {
        font-size: 0.8rem;
        color: #6c757d;
        margin-left: 8px;
        font-style: italic;
        display: inline-block;
        transition: all 0.3s ease;
    }
    
    .pdf-preview-link:hover .pdf-preview-hint {
        color: #008374;
    }
    
    /* PDF Preview Modal Styles */
    .pdf-preview-container {
        background: #f8f9fa;
        border-radius: 8px;
        padding: 10px;
        box-shadow: inset 0 0 10px rgba(0,0,0,0.1);
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .pdf-preview-link .pdf-preview-hint {
            display: block;
            margin-left: 0;
            margin-top: 4px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize PDF preview functionality
        const previewLinks = document.querySelectorAll('.pdf-preview-link');
        const pdfPreviewModal = new bootstrap.Modal(document.getElementById('pdfPreviewModal'));
        const pdfPreviewFrame = document.getElementById('pdfPreviewFrame');
        const pdfDownloadBtn = document.getElementById('pdfDownloadBtn');
        
        previewLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const pdfUrl = this.getAttribute('data-pdf-url');
                
                // Set PDF source
                pdfPreviewFrame.src = pdfUrl + '#view=fitH';
                
                // Update download button
                pdfDownloadBtn.href = pdfUrl;
                pdfDownloadBtn.setAttribute('download', this.querySelector('.pdf-title').textContent.trim());
                
                // Show modal
                pdfPreviewModal.show();
            });
        });
        
        // Clear PDF frame when modal is closed to prevent memory leaks
        document.getElementById('pdfPreviewModal').addEventListener('hidden.bs.modal', function() {
            pdfPreviewFrame.src = '';
        });
    });
</script>
@endsection