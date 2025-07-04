<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="'/assets/'"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>PMIM | @yield('title')</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('/img/logo-unimal.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('/img/unimal_ppim.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/assets/js/config.js"></script>
    {{-- trix --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/trix.css') }}">
    <script type="text/javascript" src="{{ asset('/assets/js/trix.js') }}"></script>
    <!-- Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">

                    <a href="{{ route('dashboard') }}" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img src="{{ asset('/img/unimal_ppim.png') }}" alt="ppimfe" width="200" class="rounded">
                        </span>
                        {{-- <span class="app-brand-text demo menu-text fw-bolder ms-2">Miti</span> --}}
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item  @if (isset($menuDashbord)) {{ $menuDashbord }} @endif">
                        <a href="{{ route('dashboard') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>

                    {{-- @can('admin') --}}
                    @if (Auth::user()->is_admin == 1)
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Pages Admin</span>
                    </li>
                    <li class="menu-item @if (isset($menuUsers)) {{ $menuUsers }} @endif">
                        <a href="{{ route('users.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-user-circle"></i>
                            <div data-i18n="Account Settings">Users</div>
                        </a>
                    </li>
                    <li class="menu-item @if (isset($menuLogokerja)) {{ $menuLogokerja }} @endif">
                        <a href="{{ route('logokerjasama.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-user-circle"></i>
                            <div data-i18n="Account Settings">Logo Keja Sama</div>
                        </a>
                    </li>

                    <li class="menu-item open" style="">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Menu Profil">Menu Profil</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item @if (isset($menuPosts)) {{ $menuPosts }} @endif">
                                <a href="{{ route('posts.index') }}" class="menu-link">
                                    <div data-i18n="Account">Post Artikel</div>
                                </a>
                            </li>
                            <li class="menu-item @if (isset($menuSejarah)) {{ $menuSejarah }} @endif">
                                <a href="{{ route('sejarahpmim.index') }}" class="menu-link">
                                    <div data-i18n="Notifications">Sejarah PMIM</div>
                                </a>
                            </li>
                            <li class="menu-item  @if (isset($menuProduk)) {{ $menuProduk }} @endif">
                                <a href="{{ route('produk.index') }}" class="menu-link">
                                    <div data-i18n="Connections">Sarana & Prasarana</div>
                                </a>
                            </li>
                            <li class="menu-item  @if (isset($menuAkreditas)) {{ $menuAkreditas }} @endif">
                                <a href="{{ route('akreditas.index') }}" class="menu-link">
                                    <div data-i18n="Connections">Akreditas</div>
                                </a>
                            </li>
                            <li class="menu-item  @if (isset($menuVisimisi)) {{ $menuVisimisi }} @endif">
                                <a href="{{ route('visimisi.index') }}" class="menu-link">
                                    <div data-i18n="Connections">Visi Misi</div>
                                </a>
                            </li>
                            <li class="menu-item  @if (isset($menuProfillulus)) {{ $menuProfillulus }} @endif">
                                <a href="{{ route('profillulus.index') }}" class="menu-link">
                                    <div data-i18n="Connections">Profil Lulusan</div>
                                </a>
                            </li>
                            <li class="menu-item  @if (isset($menuKerjasama)) {{ $menuKerjasama }} @endif">
                                <a href="{{ route('kerjasama.index') }}" class="menu-link">
                                    <div data-i18n="Connections">Kerja Sama & Aliansi</div>
                                </a>
                            </li>
                            <li class="menu-item  @if (isset($menuRencana)) {{ $menuRencana }} @endif">
                                <a href="{{ route('rencanastrategi.index') }}" class="menu-link">
                                    <div data-i18n="Connections">Rencana Strategi</div>
                                </a>
                            </li>
                            <li class="menu-item  @if (isset($menuOrganis)) {{ $menuOrganis }} @endif">
                                <a href="{{ route('organis.index') }}" class="menu-link">
                                    <div data-i18n="Connections">Struktur Organisasi</div>
                                </a>
                            </li>
                            <li class="menu-item  @if (isset($menuStaf)) {{ $menuStaf }} @endif">
                                <a href="{{ route('staf.index') }}" class="menu-link">
                                    <div data-i18n="Connections">Staf</div>
                                </a>
                            </li>
                            <li class="menu-item  @if (isset($menuDosen)) {{ $menuDosen }} @endif">
                                <a href="{{ route('daftardosen.index') }}" class="menu-link">
                                    <div data-i18n="Connections">Dafatr Dosen</div>
                                </a>
                            </li>                            
                        </ul>
                    </li>
                    <li class="menu-item open" style="">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Menu Akademik">Menu Akademik</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item @if (isset($menuSemester1)) {{ $menuSemester1 }} @endif">
                                <a href="{{ route('semestersatu.index') }}" class="menu-link">
                                    <div data-i18n="Account">Truktur Kurikulum</div>
                                </a>
                            </li>
                            <li class="menu-item @if (isset($menuKelender)) {{ $menuKelender }} @endif">
                                <a href="{{ route('kelender.index') }}" class="menu-link">
                                    <div data-i18n="Account">Kelender Akademik</div>
                                </a>
                            </li>
                            <li class="menu-item @if (isset($menuPanduan)) {{ $menuPanduan }} @endif">
                                <a href="{{ route('panduanakademik.index') }}" class="menu-link">
                                    <div data-i18n="Account">Panduan Akademik</div>
                                </a>
                            </li>
                            <li class="menu-item @if (isset($menugaleriakademik)) {{ $menugaleriakademik }} @endif">
                                <a href="{{ route('galeriakademik.index') }}" class="menu-link">
                                    <div data-i18n="Account">Galeri Akademik</div>
                                </a>
                            </li>
                            <li class="menu-item @if (isset($menuDownloadk)) {{ $menuDownloadk }} @endif">
                                <a href="{{ route('downloadakademik.index') }}" class="menu-link">
                                    <div data-i18n="Account">Download Akademik</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item open" style="">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Menu Akademik">Menu Download</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item @if (isset($menuAkreditasi)) {{ $menuAkreditasi }} @endif">
                                <a href="{{ route('akreditasi.index') }}" class="menu-link">
                                    <div data-i18n="Account">Akreditas</div>
                                </a>
                            </li>
                            <li class="menu-item @if (isset($menuAdministrasi)) {{ $menuAdministrasi }} @endif">
                                <a href="{{ route('administrasi.index') }}" class="menu-link">
                                    <div data-i18n="Account">Data Administrasi</div>
                                </a>
                            </li>
                            <li class="menu-item @if (isset($menuPenjaminanmutu)) {{ $menuPenjaminanmutu }} @endif">
                                <a href="{{ route('penjaminanmutu.index') }}" class="menu-link">
                                    <div data-i18n="Account">Data Penjaminan Mutu</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item open" style="">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Menu Akademik">Menu Prestasi MHS</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item @if (isset($menuPrestasi)) {{ $menuPrestasi }} @endif">
                                <a href="{{ route('prestasisiswa.index') }}" class="menu-link">
                                    <div data-i18n="Account">Prestasi MHS</div>
                                </a>
                            </li>
                            <li class="menu-item @if (isset($menuTracer)) {{ $menuTracer }} @endif">
                                <a href="{{ route('tracerstudy.index') }}" class="menu-link">
                                    <div data-i18n="Account">Tracer Study</div>
                                </a>
                            </li>                                                        
                            <li class="menu-item  @if (isset($gorilembagaMenu)) {{ $gorilembagaMenu }} @endif">
                                <a href="{{ route('publikasi-nasional.index') }}" class="menu-link">
                                    <div data-i18n="Connections">Publikasi Nasional</div>
                                </a>
                            </li>
                            <li class="menu-item @if (isset($MenuInternasional)) {{ $MenuInternasional }} @endif">
                                <a href="{{ route('publikasiinternasional.index') }}" class="menu-link">
                                    <div data-i18n="Account">Publikasi Internasional</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    {{-- @endcan --}}
                    {{-- <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Pages User</span>
                    </li>
                    <li class="menu-item @if (isset($datauser)) {{ $datauser }}@endif">
                        <a href="{{route('data-user.index')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-user-circle"></i>
                            <div data-i18n="Account Settings">My Account</div>
                        </a>
                    </li> --}}
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        {{--Jam dan tanggal--}}
                        <p class="text-primary" id="jam"></p>
                        <p class="fw-bold mt-5" id="tanggal"></p>
                        <script>
                            function updateClock() {
                                var now = new Date();

                                var jam = now.getHours();
                                var menit = now.getMinutes();
                                var detik = now.getSeconds();

                                var tanggal = now.getDate();
                                var bulan = now.getMonth() + 1; // Ingat, bulan dimulai dari 0 (Januari = 0)
                                var tahun = now.getFullYear();

                                // Mengatur format waktu
                                jam = (jam < 10) ? "0" + jam : jam;
                                menit = (menit < 10) ? "0" + menit : menit;
                                detik = (detik < 10) ? "0" + detik : detik;

                                // Mengatur format tanggal
                                bulan = (bulan < 10) ? "0" + bulan : bulan;
                                tanggal = (tanggal < 10) ? "0" + tanggal : tanggal;

                                var waktu = jam + ":" + menit + ":" + detik;
                                var tanggalFormat = tanggal + "/" + bulan + "/" + tahun;

                                // Memperbarui elemen HTML dengan waktu dan tanggal
                                document.getElementById("jam").innerHTML = waktu;
                                document.getElementById("tanggal").innerHTML = tanggalFormat;

                                // Memperbarui setiap detik
                                setTimeout(updateClock, 1000);
                            }

                            // Memanggil fungsi updateClock saat halaman dimuat
                            window.onload = updateClock;
                        </script>

                        @auth
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->

                            <li class="nav-item lh-1 me-3">
                                <strong>
                                    Welcome, {{ auth()->user()->name }}
                                </strong>
                            </li>


                            <!-- User -->
                            @include('home.userNavbar')
                            <!--/ User -->
                        </ul>
                        @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">
                                <i class="bi bi-box-arrow-in-right"></i> Login
                            </a>
                        </li>
                        @endauth
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    @yield('content')
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div
                            class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                ppimfe 2015 -
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        {{-- <div class="layout-overlay layout-menu-toggle"></div>
        <div class="buy-now">
            <a href="https://wa.me/082267429797?text=Assalamualaikum%20wr.wb%20saya%20anggota%20Miti%20Community"
                target="_blank" class="btn btn-primary btn-buy-now"> Chats Admin <i class="bi bi-whatsapp"></i></a>
        </div> --}}
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/assets/vendor/libs/popper/popper.js"></script>
    <script src="/assets/vendor/js/bootstrap.js"></script>
    <script src="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

</body>

</html>