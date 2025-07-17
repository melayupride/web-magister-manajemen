<footer id="footer" class="footer mt-2">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
                <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                    <span>PMIM</span>
                </a>
                <p>Program Magister Ilmu Manajemen</p>
                <div class="social-links d-flex mt-4 mb-3">
                    @php
                        $contactSocial = App\Models\ContactSocial::first();
                    @endphp
                    
                    @if(!empty($contactSocial->link_x))
                        <a href="{{ $contactSocial->link_x }}" target="_blank" class="twitter"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                            </svg>
                        </a>
                    @endif
                    
                    @if(!empty($contactSocial->link_fb))
                        <a href="{{ $contactSocial->link_fb }}" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
                    @endif
                    
                    @if(!empty($contactSocial->link_ig))
                        <a href="{{ $contactSocial->link_ig }}" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                    @endif
                    
                    @if(!empty($contactSocial->link_linkedin))
                        <a href="{{ $contactSocial->link_linkedin }}" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    @endif
                </div>
                <a href="/" class="mt-4">
                    <img src="/img/logo_unimal.png" alt="" width="150">
                </a>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Profil</h4>
                <ul>
                    <li><a href="https://unimal.ac.id/" target="_blank">Universitas Malikussaleh</a></li>
                    <li><a href="https://feb.unimal.ac.id/" target="_blank">Fakultas Ekonomi dan Bisnis Unimal</a></li>
                    <li><a href="https://elearning.unimal.ac.id/" target="_blank">Elearning</a></li>
                    <li><a href="http://portal.unimal.ac.id/" target="_blank">Portal</a></li>
                    <li><a href="https://journal.unimal.ac.id/j-mind" target="_blank">Jurnal J-Mind</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li>
                        @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0">
                            @auth
                            <a href="{{ route('dashboard') }}">Dashboard</a>
                            @else
                            <a href="{{ route('login') }}">Login</a>
                            @if (Route::has('register'))
                            @endif
                            @endauth
                        </div>
                        @endif
                    </li>
                    <li><a href="{{ url('/blog-posts') }}">Artikel</a></li>
                    <li><a href="{{ url('/produks') }}">Sarana & Prasarana</a></li>
                    <li><a href="{{ url('/visi-misi-tujuan') }}">Visi Misi</a></li>
                    <li><a href="{{ url('/prestasi-mahasiswa') }}">Prestasi Mahasiswa</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Contact Us</h4>
                <p>
                    {{ $contactSocial->address ?? 'Jl. Tgk Chik Ditiro No. 26, <br>Lancang Garam, Kota Lhokseumawe <br>Provinsi Aceh - Indonesia' }}
                    <br>
                    <strong>Phone:</strong> {{ $contactSocial->phone ?? '-' }}<br>
                    <strong>Fax:</strong> {{ $contactSocial->fax ?? '-' }}<br>
                    <strong>Email:</strong> {{ $contactSocial->email ?? '-' }}<br>
                    <strong>Website:</strong> 
                    @if(!empty($contactSocial->website))
                        <a href="{{ $contactSocial->website }}" class="text-light" target="_blank">{{ $contactSocial->website }}</a><br>
                    @else
                        -<br>
                    @endif
                </p>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="copyright">
            &copy; Copyright <strong><span>PMIM</span></strong>. 2015 -
            <script>
                document.write(new Date().getFullYear());
            </script>
        </div>
        <div class="credits">
            Designed by <a href="https://ppimfe.unimal.ac.id/">PMIM</a>
        </div>
    </div>
</footer>