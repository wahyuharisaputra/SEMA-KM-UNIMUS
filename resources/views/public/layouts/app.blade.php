<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SEMA KM UNIMUS') - Senat Mahasiswa Universitas Muhammadiyah Semarang</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        :root {
            --primary: #1e3a8a; /* Deep blue */
            --secondary: #facc15; /* Yellow/Gold for UMM/Unimus accent */
            --dark: #0f172a;
            --light: #f8fafc;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            color: #334155;
            background-color: var(--light);
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6, .brand-text {
            font-family: 'Outfit', sans-serif;
        }

        /* Navbar Styling */
        .navbar {
            transition: all 0.4s ease;
            padding: 1rem 0;
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        .navbar-brand img {
            height: 50px;
            width: auto;
            margin-right: 15px;
            transition: transform 0.3s;
        }
        .navbar-brand:hover img {
            transform: scale(1.05);
        }
        .brand-text {
            font-weight: 800;
            color: var(--primary);
            line-height: 1.2;
            font-size: 1.4rem;
        }
        .nav-link {
            font-weight: 500;
            color: var(--dark) !important;
            margin: 0 0.5rem;
            position: relative;
            transition: color 0.3s;
        }
        .nav-link:hover, .nav-link.active {
            color: var(--primary) !important;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            background-color: var(--secondary);
            transition: all 0.3s ease-in-out;
            transform: translateX(-50%);
        }
        .nav-link:hover::after, .nav-link.active::after {
            width: 80%;
        }
        .btn-custom {
            background-color: #ffc107; /* Vibrant Yellow from Mockup */
            color: var(--dark);
            font-weight: 700;
            border: none;
            border-radius: 12px;
            padding: 0.6rem 1.8rem;
            transition: all 0.3s;
        }
        .btn-custom:hover {
            background-color: #ffb300;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(255, 193, 7, 0.4);
        }

        /* Footer */
        .footer {
            background-color: var(--primary);
            color: white;
            padding: 4rem 0 2rem;
            margin-top: 5rem;
        }
        .footer a {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            transition: color 0.3s;
        }
        .footer a:hover {
            color: var(--secondary);
        }
        .social-icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            margin-right: 10px;
            transition: all 0.3s;
        }
        .social-icons a:hover {
            background: var(--secondary);
            color: var(--dark);
            transform: translateY(-3px);
        }

        /* Utilities */
        .section-title {
            font-weight: 800;
            color: var(--primary);
            position: relative;
            padding-bottom: 1rem;
            margin-bottom: 3rem;
            display: inline-block;
        }
        .section-title::after {
            content: '';
            position: absolute;
            width: 50px;
            height: 4px;
            left: 0;
            bottom: 0;
            background-color: var(--secondary);
            border-radius: 2px;
        }
        .section-title.text-center::after {
            left: 50%;
            transform: translateX(-50%);
        }
    </style>
    @stack('styles')
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo SEMA UNIMUS">
                <div class="d-none d-sm-block">
                    <span class="brand-text d-block">SEMA KM</span>
                    <span class="text-secondary fw-bold" style="font-size: 0.9rem;">Universitas Muhammadiyah Semarang</span>
                </div>
            </a>
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list fs-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('tentang-kami') ? 'active' : '' }}" href="{{ route('tentang-kami') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('program-kerja') ? 'active' : '' }}" href="{{ route('program-kerja') }}">Agenda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('berita') ? 'active' : '' }}" href="{{ route('berita') }}">Berita</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Informasi Publik
                        </a>
                        <ul class="dropdown-menu border-0 shadow-sm rounded-4">
                            <li><a class="dropdown-item" href="{{ route('galeri') }}">Galeri Kegiatan</a></li>
                            <li><a class="dropdown-item" href="{{ route('dokumen') }}">Dokumen Publik</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="{{ route('aspirasi') }}" class="btn btn-custom px-4 rounded-pill">LAYANAN PENGADUAN</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" width="60" class="bg-white rounded-circle p-1 me-3">
                        <h4 class="mb-0 text-white fw-bold">SEMA KM<br><span class="text-secondary fs-6">UNIMUS</span></h4>
                    </div>
                    <p class="text-white-50">Media informasi, transparansi kinerja, dan dokumentasi kegiatan Senat Mahasiswa Universitas Muhammadiyah Semarang.</p>
                </div>
                <div class="col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <h5 class="text-white fw-bold mb-3">Tautan Cepat</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{ route('tentang-kami') }}">Tentang Kami</a></li>
                        <li class="mb-2"><a href="{{ route('program-kerja') }}">Agenda</a></li>
                        <li class="mb-2"><a href="{{ route('berita') }}">Berita & Artikel</a></li>
                        <li class="mb-2"><a href="{{ route('aspirasi') }}">LAYANAN PENGADUAN</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <h5 class="text-white fw-bold mb-3">Kontak</h5>
                    <ul class="list-unstyled text-white-50">
                        <li class="mb-2"><i class="bi bi-geo-alt me-2 text-secondary"></i> Gedung Rektorat UNIMUS Lt. 1</li>
                        <li class="mb-2"><i class="bi bi-envelope me-2 text-secondary"></i> infosema@unimus.ac.id</li>
                        <li class="mb-2"><i class="bi bi-telephone me-2 text-secondary"></i> Sekretaris Jenderal: +62 882 0075 55125</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <h5 class="text-white fw-bold mb-3">Media Sosial</h5>
                    <div class="social-icons">
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                        <a href="#"><i class="bi bi-tiktok"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                    </div>
                </div>
            </div>
            <hr class="mt-4 mb-4 border-secondary opacity-25">
            <div class="text-center text-white-50 small">
                &copy; {{ date('Y') }} Senat Mahasiswa Universitas Muhammadiyah Semarang. All Rights Reserved.
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            offset: 100,
            duration: 800,
        });
    </script>
    @stack('scripts')
</body>
</html>
