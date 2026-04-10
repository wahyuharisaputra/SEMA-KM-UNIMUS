@extends('public.layouts.app')

@section('title', 'Beranda')

@push('styles')
<style>
    /* Hero Section */
    .hero-section {
        background: linear-gradient(135deg, rgba(30,58,138,0.9) 0%, rgba(15,23,42,0.95) 100%), url('https://images.unsplash.com/photo-1541339907198-e08756dedf3f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;
        color: white;
        padding: 8rem 0 6rem;
        position: relative;
        overflow: hidden;
    }
    .hero-shape {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        overflow: hidden;
        line-height: 0;
    }
    .hero-shape svg {
        display: block;
        width: calc(100% + 1.3px);
        height: 70px;
    }
    .hero-shape .shape-fill {
        fill: var(--light);
    }
    
    /* Stats Section */
    .stat-card {
        background: white;
        border-radius: 1rem;
        padding: 2rem;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        transition: transform 0.3s;
        border-bottom: 4px solid var(--secondary);
    }
    .stat-card:hover {
        transform: translateY(-10px);
    }
    .stat-icon {
        width: 60px;
        height: 60px;
        background: rgba(30, 58, 138, 0.1);
        color: var(--primary);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        margin: 0 auto 1rem;
    }
    .stat-number {
        font-size: 2.5rem;
        font-weight: 800;
        color: var(--primary);
        font-family: 'Outfit', sans-serif;
    }

    /* Modern Cards */
    .news-card {
        border: none;
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s;
        height: 100%;
    }
    .news-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }
    .news-img {
        height: 200px;
        object-fit: cover;
        width: 100%;
        transition: transform 0.5s;
    }
    .news-card:hover .news-img {
        transform: scale(1.05);
    }
    .news-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        background: var(--secondary);
        color: var(--dark);
        padding: 0.3rem 1rem;
        border-radius: 50px;
        font-size: 0.8rem;
        font-weight: 600;
        z-index: 10;
    }
    .text-limit-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    /* Ketua Section */
    .ketua-img {
        border-radius: 1rem;
        box-shadow: 15px 15px 0 var(--secondary);
    }
    .quote-icon {
        font-size: 3rem;
        color: var(--secondary);
        opacity: 0.3;
        position: absolute;
        top: -10px;
        left: -10px;
    }
</style>
@endpush

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container position-relative" style="z-index: 2;">
        <div class="row align-items-center">
            <div class="col-lg-8" data-aos="fade-right">
                <span class="badge bg-secondary text-dark px-3 py-2 mb-3 fw-bold rounded-pill text-uppercase">Website Resmi</span>
                <h1 class="display-4 fw-bold mb-4">Senat Mahasiswa Keluarga Mahasiswa<br><span class="text-secondary">UNIMUS</span></h1>
                <p class="lead mb-5 fs-5 fw-light" style="max-width: 600px;">Lembaga legislatif mahasiswa tertinggi di tingkat universitas yang menaungi seluruh mahasiswa Universitas Muhammadiyah Semarang.</p>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="{{ route('tentang-kami') }}" class="btn btn-custom btn-lg">Tentang Kami</a>
                    <a href="{{ route('program-kerja') }}" class="btn btn-outline-light btn-lg rounded-pill px-4">Agenda</a>
                </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block text-center" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{ asset('images/logo.png') }}" alt="Logo Besar" class="img-fluid" style="max-height: 350px; filter: drop-shadow(0 0 20px rgba(255,255,255,0.2));">
            </div>
        </div>
    </div>
    <div class="hero-shape">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C54.43,89.5,108.66,74.75,166,66.6,218.48,59.15,271.55,63.1,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
</section>

<!-- Stats Section -->
<section class="py-5" style="margin-top: -50px; position: relative; z-index: 10;">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-card">
                    <div class="stat-icon"><i class="bi bi-people-fill"></i></div>
                    <div class="stat-number">45+</div>
                    <div class="text-muted fw-bold text-uppercase small mt-2">Pengurus Aktif</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-card">
                    <div class="stat-icon"><i class="bi bi-diagram-3-fill"></i></div>
                    <div class="stat-number">5</div>
                    <div class="text-muted fw-bold text-uppercase small mt-2">Komisi / Divisi</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-card">
                    <div class="stat-icon"><i class="bi bi-calendar2-check-fill"></i></div>
                    <div class="stat-number">24</div>
                    <div class="text-muted fw-bold text-uppercase small mt-2">Agenda Organisasi</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="stat-card">
                    <div class="stat-icon"><i class="bi bi-file-earmark-text-fill"></i></div>
                    <div class="stat-number">120</div>
                    <div class="text-muted fw-bold text-uppercase small mt-2">Aspirasi Terserap</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sambutan Ketua -->
<section class="py-5 my-4">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1556157382-97eda2d62296?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Ketua SEMA" class="img-fluid ketua-img w-100 object-fit-cover" style="height: 500px;">
            </div>
            <div class="col-lg-7 position-relative" data-aos="fade-left">
                <i class="bi bi-quote quote-icon"></i>
                <div class="ps-4">
                    <h5 class="text-uppercase text-secondary fw-bold mb-2">Sambutan</h5>
                    <h2 class="section-title mb-4">Ketua Umum SEMA KM</h2>
                    <p class="fs-5 text-dark font-italic mb-4">
                        "Selamat datang di portal resmi web Senat Mahasiswa Keluarga Mahasiswa Universitas Muhammadiyah Semarang. Website ini kami dedikasikan sebagai wujud transparansi, akuntabilitas, dan wadah interaksi antara lembaga dengan seluruh insan akademika UNIMUS. Mari bersama membangun iklim demokrasi kampus yang berkemajuan."
                    </p>
                    <div class="d-flex align-items-center mt-4">
                        <div>
                            <h5 class="fw-bold mb-0 text-primary">Ahmad Fulan</h5>
                            <p class="text-muted mb-0">Ketua Umum Periode 2026</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Agenda Unggulan -->
<section class="py-5" id="program-kerja">
    <div class="container py-lg-4">
        <div class="mb-5 text-center" data-aos="fade-up">
            <h2 class="section-title text-center">Agenda Unggulan</h2>
            <p class="text-muted max-w-2xl mx-auto">Kami memiliki berbagai program inisiatif untuk mendukung penuh potensi mahasiswa dan memperbaiki eskalasi advokasi kampus.</p>
        </div>
        
        <div class="row g-4">
            <!-- Dummy Data -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 bg-light p-4 rounded-4 hover-shadow transition" style="transition: all .3s;">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary text-white rounded p-3 me-3">
                            <i class="bi bi-megaphone fs-3"></i>
                        </div>
                        <h5 class="fw-bold mb-0 text-dark">Sekolah Legislatif</h5>
                    </div>
                    <p class="text-muted">Pendidikan dan pelatihan khusus mengenai advokasi, pergerakan, dan birokrasi kampus untuk membekali calon pemimpin mahasiswa.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 bg-light p-4 rounded-4 hover-shadow transition" style="transition: all .3s;">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-success text-white rounded p-3 me-3">
                            <i class="bi bi-search fs-3"></i>
                        </div>
                        <h5 class="fw-bold mb-0 text-dark">Serap Aspirasi</h5>
                    </div>
                    <p class="text-muted">Kegiatan penyerapan aspirasi secara komprehensif ke organisasi tingkat fakultas dan prodi untuk mengetahui keadaan lapangan sesungguhnya.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 bg-light p-4 rounded-4 hover-shadow transition" style="transition: all .3s;">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-warning text-dark rounded p-3 me-3">
                            <i class="bi bi-file-earmark-check fs-3"></i>
                        </div>
                        <h5 class="fw-bold mb-0 text-dark">Revisi UU KM</h5>
                    </div>
                    <p class="text-muted">Pembahasan, pengkajian, dan amandemen UU kelembagaan KM UNIMUS guna penyelarasan dengan urgensi saat ini.</p>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5" data-aos="zoom-in">
            <a href="{{ route('program-kerja') }}" class="btn btn-outline-primary rounded-pill px-4">Lihat Seluruh Agenda</a>
        </div>
    </div>
</section>

<!-- Berita Terbaru -->
<section class="py-5" style="background-color: var(--light);">
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-end mb-5 border-bottom pb-3" data-aos="fade-up">
            <div>
                <h2 class="section-title mb-0" style="margin-bottom:0 !important">Berita Terbaru</h2>
            </div>
            <a href="{{ route('berita') }}" class="text-decoration-none text-primary fw-bold d-none d-md-block">Lihat Semua <i class="bi bi-arrow-right"></i></a>
        </div>

        <div class="row g-4 mt-3">
            <!-- Dummy Article 1 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card news-card position-relative">
                    <span class="news-badge bg-primary text-white">Kegiatan</span>
                    <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="card-img-top news-img" alt="News Image">
                    <div class="card-body p-4 bg-white">
                        <div class="text-muted small mb-2"><i class="bi bi-calendar3 me-1"></i> 10 April 2026</div>
                        <h5 class="card-title fw-bold text-dark mb-3">Pelantikan Raya Organisasi Mahasiswa UNIMUS 2026 Berlangsung Khidmat</h5>
                        <p class="card-text text-muted text-limit-3">Rektor UNIMUS secara resmi melantik jajaran kepengurusan tingkat universitas, termasuk Senat Mahasiswa (SEMA)...</p>
                        <a href="#" class="text-decoration-none fw-bold mt-2 d-inline-block text-secondary">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Dummy Article 2 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card news-card position-relative">
                    <span class="news-badge">Advokasi</span>
                    <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="card-img-top news-img" alt="News Image">
                    <div class="card-body p-4 bg-white">
                        <div class="text-muted small mb-2"><i class="bi bi-calendar3 me-1"></i> 05 April 2026</div>
                        <h5 class="card-title fw-bold text-dark mb-3">Audiensi SEMA dengan Rektorat Tekait Fasilitas Kampus Terpadu</h5>
                        <p class="card-text text-muted text-limit-3">SEMA KM UNIMUS berhasil mengawal perbaikan fasilitas ruang kelas dan tempat ibadah melalui mekanisme audiensi...</p>
                        <a href="#" class="text-decoration-none fw-bold mt-2 d-inline-block text-secondary">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Dummy Article 3 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card news-card position-relative">
                    <span class="news-badge bg-info text-dark">Pengumuman</span>
                    <img src="https://images.unsplash.com/photo-1540317580384-e5d43616b9aa?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="card-img-top news-img" alt="News Image">
                    <div class="card-body p-4 bg-white">
                        <div class="text-muted small mb-2"><i class="bi bi-calendar3 me-1"></i> 02 April 2026</div>
                        <h5 class="card-title fw-bold text-dark mb-3">Open Recruitment Staff Magang SEMA KM Tahun 2026 Resmi Dibuka</h5>
                        <p class="card-text text-muted text-limit-3">Kesempatan bagi mahasiswa baru lintas program studi untuk bergabung mempelajari pergerakan legislatif mahasiswa...</p>
                        <a href="#" class="text-decoration-none fw-bold mt-2 d-inline-block text-secondary">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to action: Aspirasi -->
<section class="py-5">
    <div class="container my-5">
        <div class="row bg-primary text-white rounded-5 p-5 position-relative overflow-hidden" data-aos="zoom-in" style="box-shadow: 0 20px 40px rgba(30,58,138,0.2);">
            <div class="col-lg-8 position-relative" style="z-index: 2;">
                <h2 class="fw-bold mb-3">Punya Ide atau Masalah di Kampus?</h2>
                <p class="fs-5 text-white-50 mb-4">Jangan diam saja! Sampaikan aspirasi Anda kepada kami. Kami berkomitmen untuk mendengar, mengkaji, dan menindaklanjuti keluh kesah Anda ke pihak birokrasi kampus.</p>
                <a href="{{ route('aspirasi') }}" class="btn btn-custom btn-lg px-4 gap-2 d-inline-flex align-items-center">
                    Tulis Aspirasi Sekarang <i class="bi bi-send-fill mt-1"></i>
                </a>
            </div>
            <i class="bi bi-megaphone position-absolute" style="font-size: 15rem; right: -20px; top: -30px; opacity: 0.1; color: white; transform: rotate(-15deg);"></i>
        </div>
    </div>
</section>

@endsection
