@extends('welcome')

@section('content')
    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="row gy-5">
                <div class="mt-5 col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>Program Magister Ilmu Manajemen</h2>
                    <p>
                        Menjadi Program Studi Magister yang Berdaya Saing dalam Pengembangan Ilmu Manajemen Berbasis Potensi
                        Lokal Di Asia.
                    </p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ route('dashboard') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500">Dashboard</a>
                                @else
                                    @if (Route::has('register'))
                                        <a href="{{ url('/visi-misi-tujuan') }}"
                                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline btn-get-started fw-bold">Read
                                            More</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <video id="intro-video" controls autoplay
                        style="max-width: 100%;
                        height: auto;
                        width: 100%;
                        display: block;
                        margin: 0 auto;">
                        <source src="{{ asset('img/intro.mp4') }}" type="video/mp4">
                        <source src="{{ asset('img/intro.mp4') }}" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </section>

    {{-- logo kerja sama --}}
    @include('home.Clients-Section')

    {{-- Iklan --}}
    @include('home.StatsCounterSection')

    {{-- Sertifikat Akreditasi --}}
    <section id="akreditasi" class="akreditasi-section sections-bg">
        <div class="container">
            <div class="section-header d-flex justify-end">
                <h2>Sertifikat Akreditasi</h2>
            </div>
            
            @if($akreditas->count() > 0)
            <div id="akreditasiCarousel" class="carousel slide mt-0" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($akreditas as $index => $akreditasi)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <div class="akreditasi-card">
                            <div class="akreditasi-img-container">
                                <img src="{{ asset('storage/' . $akreditasi->image) }}" 
                                     class="akreditasi-img" 
                                     alt="Sertifikat Akreditasi"
                                     onclick="openModal(this)">
                                <div class="akreditasi-overlay">
                                    <h3>{{ $akreditasi->title ?? 'Sertifikat Akreditasi' }}</h3>
                                    <p>{!! Str::limit($akreditasi->description, 100) ?? 'Deskripsi Sertifikat.' !!}</p>
                                    <button class="btn btn-sm btn-light" 
                                            onclick="downloadImage('{{ asset('storage/' . $akreditasi->image) }}', '{{ $akreditasi->title }}')">
                                        <i class="fas fa-download me-1"></i> Unduh
                                    </button>
                                </div>
                            </div>
                            <div class="akreditasi-body">
                                <h3 class="akreditasi-title">{{ $akreditasi->title ?? 'Sertifikat Akreditasi' }}</h3>
                                <p class="akreditasi-description">
                                    {!! $akreditasi->description ?? 'Deskripsi Sertifikat.' !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                @if($akreditas->count() > 1)
                <button class="carousel-control-prev" type="button" data-bs-target="#akreditasiCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#akreditasiCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                @endif
            </div>
            @else
            <div class="col-12 text-center py-5">
                <p class="text-muted">Belum ada sertifikat akreditasi yang tersedia</p>
            </div>
            @endif
        </div>
    </section>

    {{-- Artikel --}}
    <section id="recent-posts" class="recent-posts sections-bg">
        <div class="container">
            <div class="section-header d-flex justify-end">
                <h2>Informasi Baru</h2>
            </div>
            <div class="row gy-4">
                @forelse ($dataList as $item)
                    <div class="col-xl-4 col-md-6">
                        <article>
                            <div class="post-img">
                                @if ($item->image)
                                    <div style="max-height: 350px; overflow:hidden;">
                                        <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top"
                                            alt="{{ $item->category->name }}" class="img-fluid " width="100%">
                                    </div>
                                @else
                                    <img src="{{ asset('/img/blog-bg.jpg') }}" alt="Avatar" width="100%">
                                @endif
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="post-category text-success fw-semibold">{{ $item->category->name }}</p>
                                <p class="post-date">
                                    <time datetime="{{ $item->created_at->format('Y-m-d') }}"><i class="bi bi-clock"></i>
                                        {{ $item->created_at->format('M j, Y') }}</time>
                                </p>
                            </div>
                            <h5 class="title">
                                <a href="{{ route('post.show', $item->id) }}">{{ $item->title }}</a>
                                </h2>
                            </h5>
                            <a href="{{ route('post.show', $item->id) }}">Baca Selengkapnya
                            </a>
                        </article>
                    </div><!-- End post list item -->
                @empty
                    <div class="page-wrap d-flex flex-row align-items-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-12 text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div><!-- End recent posts list -->

            <div class="d-flex justify-content-center mt-4">
                <a href="{{ url('/blog-posts') }}" class=" btn btn-outline-success rounded">All</a>
            </div>
        </div>
    </section>

    <!-- The Modal -->
    <div id="imageModal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content mt-3" id="modalImage">
    </div>

    <style>
        /* Akreditasi Section */
        .akreditasi-section {
            padding: 60px 0;
            background-color: #f8f9fa;
        }
        
        .akreditasi-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            margin: 0 auto;
        }
        
        .akreditasi-img-container {
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f1f1f1;
        }
        
        .akreditasi-img {
            display: block;
            margin: 30px auto;
            max-width: 100%;
            max-height: 600px;
            width: auto;
            height: auto;
            object-fit: contain;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            transition: transform 0.35s ease, box-shadow 0.35s ease;
            cursor: zoom-in;
        }
        
        .akreditasi-img:hover {
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.25);
            transform: scale(1.05);
        }
        
        .akreditasi-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 167, 146, 0.85);
            color: white;
            padding: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .akreditasi-img-container:hover .akreditasi-overlay {
            opacity: 1;
        }
        
        .akreditasi-overlay h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            text-align: center;
        }
        
        .akreditasi-overlay p {
            font-size: 0.9rem;
            margin-bottom: 15px;
            text-align: center;
        }
        
        .akreditasi-body {
            padding: 20px;
        }
        
        .akreditasi-title {
            color: #00a792;
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        .akreditasi-description {
            color: #555;
            font-size: 0.95rem;
            line-height: 1.6;
        }
        
        /* Carousel Controls */
        .carousel-control-prev,
        .carousel-control-next {
            width: 5%;
            opacity: 1;
        }
        
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #00a792;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            background-size: 60%;
        }
        
        /* Modal Styles */
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const video = document.getElementById("intro-video");
            video.muted = false;
        });

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