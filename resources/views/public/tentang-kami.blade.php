@extends('public.layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<!-- Page Header -->
<div class="bg-primary text-white py-5" style="background: linear-gradient(135deg, var(--primary) 0%, rgba(15,23,42,1) 100%);">
    <div class="container text-center py-4">
        <h1 class="display-5 fw-bold" data-aos="fade-down">Tentang SEMA KM UNIMUS</h1>
        <p class="lead text-white-50" data-aos="fade-up" data-aos-delay="100">Mengenal Lebih Dekat Legislatif Mahasiswa Universitas Muhammadiyah Semarang</p>
    </div>
</div>

<!-- Sejarah Section -->
<div class="container py-5">
    <div class="row align-items-center mb-5">
        <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
            <img src="https://images.unsplash.com/photo-1577962917302-cd874c4e31d2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Kampus Unimus" class="img-fluid rounded-4 shadow-lg">
        </div>
        <div class="col-lg-6 ps-lg-5" data-aos="fade-left">
            <h2 class="section-title text-start mb-4">Sejarah Organisasi</h2>
            <p class="text-muted lh-lg">Senat Mahasiswa Keluarga Mahasiswa (SEMA KM) Universitas Muhammadiyah Semarang dibentuk sebagai wadah representatif mahasiswa di tingkat universitas. Mengemban fungsi legislasi, aspirasi, mediasi, penganggaran, dan pengawasan terhadap seluruh kegiatan kemahasiswaan di lingkungan UNIMUS.</p>
            <p class="text-muted lh-lg">Sejak awal berdirinya, SEMA KM terus memperjuangkan hak-hak mahasiswa dan memastikan segala bentuk regulasi internal KM UNIMUS berjalan sesuai dengan koridor hukum yang disepakati bersama, berlandaskan nilai-nilai Keislaman dan Kemuhammadiyahan.</p>
        </div>
    </div>
</div>

<!-- Visi Misi Section -->
<div class="bg-light py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title text-center">Visi & Misi</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="card h-100 border-0 shadow-sm p-4 rounded-4" style="border-top: 5px solid var(--secondary) !important;">
                    <div class="text-center mb-4">
                        <i class="bi bi-eye text-primary fs-1"></i>
                        <h3 class="fw-bold mt-2">Visi</h3>
                    </div>
                    <p class="text-center text-muted lh-lg fs-5">"Menjadikan SEMA KM UNIMUS sebagai lembaga legislatif mahasiswa yang progresif, inklusif, transparan, dan berkeadilan guna mewujudkan KM UNIMUS yang berdaulat dan berkemajuan."</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="card h-100 border-0 shadow-sm p-4 rounded-4" style="border-top: 5px solid var(--primary) !important;">
                    <div class="text-center mb-4">
                        <i class="bi bi-list-check text-primary fs-1"></i>
                        <h3 class="fw-bold mt-2">Misi</h3>
                    </div>
                    <ul class="text-muted lh-lg list-unstyled">
                        <li class="mb-3 d-flex"><i class="bi bi-check-circle-fill text-secondary me-3 mt-1"></i> Mengoptimalkan fungsi legislasi melalui produk hukum yang solutif.</li>
                        <li class="mb-3 d-flex"><i class="bi bi-check-circle-fill text-secondary me-3 mt-1"></i> Menjalankan fungsi pengawasan secara objektif dan independen terhadap BEM KM UNIMUS.</li>
                        <li class="mb-3 d-flex"><i class="bi bi-check-circle-fill text-secondary me-3 mt-1"></i> Membangun mekanisme penjaringan aspirasi mahasiswa yang mudah diakses dan responsif.</li>
                        <li class="mb-3 d-flex"><i class="bi bi-check-circle-fill text-secondary me-3 mt-1"></i> Menjalin sinergitas harmonis antar elemen organisasi mahasiswa di UNIMUS.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Struktur Organisasi Section -->
<div class="container py-5 my-3">
    <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="section-title text-center">Struktur Organisasi</h2>
        <p class="text-muted">Mengenal lebih dekat para wakil mahasiswa yang mengemban amanah di SEMA KM UNIMUS.</p>
    </div>

    <!-- Pimpinan -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-3 col-md-6 text-center" data-aos="zoom-in" data-aos-delay="100">
            <div class="card border-0 bg-transparent">
                <img src="https://images.unsplash.com/photo-1556157382-97eda2d62296?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=400&q=80" class="rounded-circle object-fit-cover mx-auto mb-3 shadow" style="width: 150px; height: 150px; border: 4px solid var(--secondary);" alt="Ketua Umum">
                <h5 class="fw-bold mb-1">Ahmad Fulan</h5>
                <p class="text-primary fw-bold small text-uppercase">Ketua Umum</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center" data-aos="zoom-in" data-aos-delay="200">
            <div class="card border-0 bg-transparent">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=400&q=80" class="rounded-circle object-fit-cover mx-auto mb-3 shadow" style="width: 150px; height: 150px; border: 4px solid var(--primary);" alt="Wakil Ketua">
                <h5 class="fw-bold mb-1">Siti Nurhaliza</h5>
                <p class="text-primary fw-bold small text-uppercase">Wakil Ketua Umum</p>
            </div>
        </div>
    </div>

    <!-- Komisi -->
    <div class="row g-4 mt-4">
        <!-- Komisi 1 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up">
            <div class="card border-0 shadow-sm rounded-4 h-100 text-center p-4">
                <h5 class="fw-bold text-dark mb-4 border-bottom pb-2">Komisi I: Legislasi</h5>
                <div class="d-flex flex-column align-items-center">
                    <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&h=150&q=80" class="rounded-circle object-fit-cover mb-2" style="width: 80px; height: 80px;" alt="Ketua Komisi">
                    <h6 class="fw-bold">Budi Santoso</h6>
                    <span class="badge bg-secondary text-dark mb-3">Ketua Komisi</span>
                    <p class="small text-muted mb-0">Bertanggungjawab dalam proses penyusunan, pengkajian, dan revisi undang-undang KM UNIMUS.</p>
                </div>
            </div>
        </div>
        <!-- Komisi 2 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card border-0 shadow-sm rounded-4 h-100 text-center p-4">
                <h5 class="fw-bold text-dark mb-4 border-bottom pb-2">Komisi II: Aspirasi</h5>
                <div class="d-flex flex-column align-items-center">
                    <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&h=150&q=80" class="rounded-circle object-fit-cover mb-2" style="width: 80px; height: 80px;" alt="Ketua Komisi">
                    <h6 class="fw-bold">Ayu Wandira</h6>
                    <span class="badge bg-secondary text-dark mb-3">Ketua Komisi</span>
                    <p class="small text-muted mb-0">Fokus pada penyaringan, advokasi, dan penindaklanjutan aspirasi mahasiswa ke pihak terkait.</p>
                </div>
            </div>
        </div>
        <!-- Komisi 3 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card border-0 shadow-sm rounded-4 h-100 text-center p-4">
                <h5 class="fw-bold text-dark mb-4 border-bottom pb-2">Komisi III: Pengawasan</h5>
                <div class="d-flex flex-column align-items-center">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&h=150&q=80" class="rounded-circle object-fit-cover mb-2" style="width: 80px; height: 80px;" alt="Ketua Komisi">
                    <h6 class="fw-bold">Rizky Pratama</h6>
                    <span class="badge bg-secondary text-dark mb-3">Ketua Komisi</span>
                    <p class="small text-muted mb-0">Mengawasi kinerja mitra kerja (BEM) serta memastikan agenda berjalan sesuai GBPK.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
