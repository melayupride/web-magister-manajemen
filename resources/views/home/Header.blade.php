<section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <!-- Google Translate Element with Custom Styling -->
            <div class="custom-translate-container">
                <div id="google_translate_element"></div>
            </div>

            <style>
                .custom-translate-container {
                    position: relative;
                    margin-right: 15px;
                }
                
                .custom-translate-container .goog-te-gadget {
                    font-family: 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
                    color: transparent !important;
                }
                
                .custom-translate-container .goog-te-gadget-simple {
                    background-color: #f8f9fa;
                    border: 1px solid #dee2e6 !important;
                    border-radius: 25px;
                    padding: 5px 12px !important;
                    transition: all 0.3s ease;
                }
                
                .custom-translate-container .goog-te-gadget-simple:hover {
                    background-color: #e9ecef;
                    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
                }
                
                .goog-te-combo {
                    background: white;
                    border: 1px solid #ced4da !important;
                    border-radius: 20px !important;
                    padding: 8px 35px 8px 15px !important;
                    font-size: 14px !important;
                    color: #495057 !important;
                    cursor: pointer;
                    outline: none;
                    transition: all 0.3s ease;
                    min-width: 120px;
                    appearance: none;
                    -webkit-appearance: none;
                    -moz-appearance: none;
                    background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%236c757d' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
                    background-repeat: no-repeat;
                    background-position: right 12px center;
                    background-size: 16px;
                    box-shadow: 0 1px 2px rgba(0,0,0,0.05);
                    height: 38px;
                }
                
                .goog-te-combo:hover {
                    border-color: #adb5bd !important;
                    box-shadow: 0 0 0 3px rgba(108, 117, 125, 0.1);
                }
                
                .goog-te-combo:focus {
                    border-color: #86b7fe !important;
                    box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.25);
                }
                
                /* Style for dropdown options */
                .goog-te-combo option {
                    padding: 8px 12px;
                    background: white;
                    color: #212529;
                    font-size: 14px;
                }
                
                .goog-te-combo option:hover {
                    background-color: #f8f9fa !important;
                }
                
                .goog-te-combo option:checked {
                    background-color: #e9ecef !important;
                    font-weight: 500;
                }
                
                /* Hide Google branding */
                .goog-te-gadget .goog-te-combo {
                    margin: 0 !important;
                }
                
                .goog-logo-link, .goog-te-banner-frame {
                    display: none !important;
                }
                
                /* Fix for dropdown arrow in Firefox */
                @-moz-document url-prefix() {
                    .goog-te-combo {
                        padding-right: 30px !important;
                        background-position: right 8px center;
                    }
                }
                
                /* Responsive adjustments */
                @media (max-width: 768px) {
                    .custom-translate-container {
                        margin-right: 10px;
                    }
                    
                    .goog-te-combo {
                        padding: 6px 30px 6px 12px !important;
                        font-size: 13px !important;
                        min-width: 100px;
                        height: 34px;
                    }
                }
            </style>

            <script type="text/javascript">
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({
                        pageLanguage: 'id',
                        includedLanguages: 'id,en',
                        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                    }, 'google_translate_element');
                    
                    // Set initial language to Indonesian
                    var select = document.querySelector(".goog-te-combo");
                    if (select) {
                        select.value = 'id';
                    }
                }
            </script>
            <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a class="fw-semibold" href="https://unimal.ac.id/" target="_blank">Universitas Malikussaleh</a>
            <a class="fw-semibold" href="https://feb.unimal.ac.id/" target="_blank">Fakultas Ekonomi</a>
        </div>
    </div>
</section>

{{-- header --}}
<header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('/img/unimal_ppim.png') }}" alt="Miti" class="rounded">
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ url('/') }}">Beranda</a></li>
                {{-- <li><a href="{{ url('/produks') }}">Gallery</a></li> --}}
                <li class="dropdown"><a href="#"><span>Profil</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="{{ url('/blog-posts') }}">Berita & Pengumuman</a></li>
                        <li><a href="{{ url('/sejarah-pmim') }}">Sejarah PMIM</a></li>
                        <li><a href="{{ url('/produks') }}">Sarana dan prasarana</a></li>
                        <li><a href="{{ url('/visi-misi-tujuan') }}">Visi, Misi, Tujuan</a></li>
                        <li><a href="{{ url('/profil-lulusan') }}">Profil Lulusan</a></li>
                        <li><a href="{{ url('/kerja-sama-aliansi') }}">Kerja Sama & Aliansi</a></li>
                        <li><a href="{{ url('/rencana-strategi') }}">Rencana Strategi</a></li>
                        <li><a href="{{ url('/truktur-organisasi') }}">Struktur Organisasi</a></li>
                        <li><a href="{{ url('/page-staf') }}">Staf</a></li>
                        <li><a href="{{ url('/daftar-dosen') }}">Daftar Dosen</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Akademik</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="https://elearning.unimal.ac.id/" target="_balck">E-Learning</a></li>
                        <li><a href="http://portal.unimal.ac.id/" target="_black">Portal Akademik</a></li>
                        <li><a href="{{ url('/truktur-kurikulum') }}">Struktur Kurikulum</a></li>
                        <li><a href="{{ url('/kelender-akademik') }}">Kalender Akademik</a></li>
                        <li><a href="{{ url('/panduan-akademik') }}">Panduan Akademik</a></li>
                        <li><a href="{{ url('/galeri-akademik') }}">Galeri</a></li>
                        <li><a href="{{ url('/download-akademik') }}">Download</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Akreditasi</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="{{ url('/akreditas-ppimfe') }}">Sertifikat Akreditasi</a></li>
                        <li><a href="{{ url('/instrumen-akreditasi') }}">Instrumen Akreditasi</a></li>
                        <li><a href="{{ url('/akreditasi-akademik') }}">Dokumen Akreditasi</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Kemahasiswaan</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="{{ url('/prestasi-mahasiswa') }}">Prestasi Mahasiswa</a></li>
                        <li><a href="{{ url('/tracer-study') }}">Tracer Study</a></li>
                        <li class="dropdown"><a href="#"><span>Publikasi</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="{{ url('/publikasiuser') }}">Nasional</a></li>
                                <li><a href="{{ url('/publikasi-inter') }}">Internasional</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="https://ojs.unimal.ac.id/jmi" target="_black">J-MIND</a></li>

                <li class="dropdown"><a href="#"><span>Download</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="{{ url('/download-adminis') }}">Dokumen Administrasi</a></li>
                        <li><a href="{{ url('/download-penjaminan-mutu') }}">Dokumen Penjaminan <br> Mutu</a></li>
                        <li><a href="{{ url('/download-ded') }}">Dokumen Evaluasi  <br> Diri (DED)</a></li>
                        <li><a href="{{ url('/download-dkps') }}">Dokumen Kinerja <br> Program Studi (DKPS)</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#"><span>Pendaftaran</span> <i class="bi bi-chevron-down dropdown-indicator"></i>
                    </a>
                    <ul>
                        <li><a href="https://forms.gle/QNxz9z6VhQK5Mx1S8" target="_black">Usulan Judul Tesis</a></li>
                        <li><a href="https://forms.gle/vhkpSkLsUQ7q7wdQ9" target="_black">Daftar Seminar Tesis</a></li>
                        <li><a href="https://forms.gle/Lnt5q5yCVc2XDzQ1A" target="_black">Daftar Sidang Tesis</a></li>
                        <li><a href="https://unimal.ac.id/layanan/berita/panduan-penelitian-dan-pengabdian-kepada-masyarakat-sumber-dana-pnbp-tahun-2023-universitas-malikussaleh"
                                target="_black">Usulan Penelitian <br> PNBP</a></li>
                    </ul>
                </li>
                {{-- <li><a href="{{ url('/contact') }}">Contact</a></li> --}}
            </ul>
        </nav><!-- .navbar -->

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
</header>
