@extends('welcome')

@section('title', 'Akreditasi')

@section('content')
<style>
    .akreditasi-section {
        margin-top: 60px;
    }
    .akreditasi-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .akreditasi-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s ease;
        margin-bottom: 30px;
        width: 100%;
        max-width: 800px;
        position: relative;
    }
    .akreditasi-card:hover {
        transform: translateY(-10px);
    }
    .akreditasi-img-container {
        position: relative;
        overflow: hidden;
    }
    .akreditasi-img {
        width: 100%;
        height: auto;
        object-fit: cover;
        transition: transform 0.3s ease;
        cursor: pointer;
    }
    .akreditasi-img:hover {
        transform: scale(1.02);
    }
    .akreditasi-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 167, 146, 0.8);
        color: white;
        padding: 15px;
        transform: translateY(100%);
        transition: transform 0.3s ease;
    }
    .akreditasi-img-container:hover .akreditasi-overlay {
        transform: translateY(0);
    }
    .akreditasi-body {
        padding: 30px;
    }
    .akreditasi-title {
        color: #00a792;
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 15px;
    }
    .akreditasi-description {
        color: #555;
        font-size: 16px;
        line-height: 1.6;
        margin-bottom: 20px;
    }
    .section-header {
        text-align: center;
        margin-bottom: 50px;
    }
    .section-title {
        color: #00a792;
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 15px;
        position: relative;
        display: inline-block;
    }
    .section-title:after {
        content: '';
        position: absolute;
        width: 50%;
        height: 3px;
        background: #00a792;
        bottom: -10px;
        left: 25%;
    }
    .section-subtitle {
        color: #777;
        font-size: 18px;
        max-width: 700px;
        margin: 0 auto;
    }
    .download-btn {
        position: absolute;
        top: 15px;
        right: 15px;
        background: rgba(0, 167, 146, 0.8);
        color: white;
        border: none;
        border-radius: 5px;
        padding: 8px 15px;
        cursor: pointer;
        transition: background 0.3s ease;
        z-index: 10;
    }
    .download-btn:hover {
        background: #008c7a;
    }
    /* Fullscreen modal */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.9);
        overflow: auto;
    }
    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 1200px;
        max-height: 90vh;
        object-fit: contain;
    }
    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
        cursor: pointer;
    }
    .close:hover {
        color: #00a792;
    }
</style>

<section id="akreditasi" class="akreditasi-section">
        <div class="akreditasi-container">
            @foreach ($akreditas as $akreditas)
            <div class="akreditasi-card" data-aos="zoom-in">
                <div class="akreditasi-img-container">
                    <button class="download-btn" onclick="downloadImage('{{ asset('storage/' . $akreditas->image) }}', '{{ $akreditas->title }}')">
                        <i class="fas fa-download"></i> Download
                    </button>
                    <img src="{{ asset('storage/' . $akreditas->image) }}" class="akreditasi-img" alt="Sertifikat Akreditasi" onclick="openModal(this)">
                    <div class="akreditasi-overlay">
                        <h3>{{ $akreditas->title ?? 'Sertifikat Akreditasi' }}</h3>
                        <article>
                            <p>{!! Str::limit($akreditas->description, 150) ?? 'Deskripsi Sertifikat.' !!}</p>
                        </article>
                    </div>
                </div>
                <div class="akreditasi-body">
                    <h3 class="akreditasi-title">{{ $akreditas->title ?? 'Sertifikat Akreditasi' }}</h3>
                    <article>
                        <p class="akreditasi-description">
                            {!! $akreditas->description ?? 'Deskripsi Sertifikat.' !!}
                        </p>
                    </article>
                </div>
            </div>
            @endforeach
    </div>
</section>

<!-- The Modal -->
<div id="imageModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <img class="modal-content mt-3" id="modalImage">
</div>

<script>
    // Function to download image
    function downloadImage(url, filename) {
        fetch(url)
            .then(response => response.blob())
            .then(blob => {
                const link = document.createElement('a');
                link.href = URL.createObjectURL(blob);
                link.download = filename || 'sertifikat-akreditasi';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            })
            .catch(error => {
                console.error('Error downloading image:', error);
                // Fallback to direct download if fetch fails
                const link = document.createElement('a');
                link.href = url;
                link.download = filename || 'sertifikat-akreditasi';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            });
    }

    // Function to open modal with clicked image
    function openModal(img) {
        const modal = document.getElementById('imageModal');
        const modalImg = document.getElementById('modalImage');
        modal.style.display = "block";
        modalImg.src = img.src;
    }

    // Function to close modal
    function closeModal() {
        document.getElementById('imageModal').style.display = "none";
    }

    // Close modal when clicking outside the image
    window.onclick = function(event) {
        const modal = document.getElementById('imageModal');
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<!-- Add Font Awesome for download icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

@endsection