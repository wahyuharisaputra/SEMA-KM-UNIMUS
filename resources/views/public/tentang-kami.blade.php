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

<!-- Profil Section -->
<div class="container py-5">
    <div class="row align-items-center mb-5">
        <div class="col-lg-5 text-center mb-4 mb-lg-0" data-aos="fade-right">
            <img src="{{ asset('images/logo.png') }}" alt="Logo SEMA KM UNIMUS" class="img-fluid" style="max-height: 400px;">
        </div>
        <div class="col-lg-7 ps-lg-5" data-aos="fade-left">
            <div class="mb-4">
                <h4 class="text-primary fw-bold mb-0">Hidup Mahasiswa!</h4>
                <h4 class="text-danger fw-bold mb-0">Hidup Rakyat Indonesia!</h4>
                <div class="mt-2 fw-bold text-secondary">
                    <span>Viva legislativa!</span> | <span>Viva Yudikativa!</span>
                </div>
            </div>

            <div class="card border-0 bg-light p-4 rounded-4 mb-4 border-start border-4 border-primary">
                <p class="fst-italic mb-0 text-dark">
                    "Mahasiswa adalah manusia yang diharapkan menjadi agent of change (agen perubahan) bagi masyarakat dan bangsa Indonesia sudah sepatutnya kita bergerak untuk kebaikan bangsa dan negara khususnya untuk diri kita masing-masing."
                </p>
            </div>

            <p class="text-muted lh-lg">
                Senat Mahasiswa Universitas Muhammadiyah Semarang atau yang kemudian disingkat menjadi <strong>SEMA KM Unimus</strong> adalah organisasi yang terbentuk dan disahkan pada tanggal <strong>11 Desember 2016</strong>. Dengan umur yang sangat muda ini SEMA KM Unimus berkedudukan sebagai organisasi/ lembaga legislatif dan yudikatif satu-satunya di kampus Unimus dan menjadi salah satu lembaga tinggi yang ada di kampus Unimus selain Badan Eksekutif Mahasiswa Keluarga Mahasiswa (BEM KM) Unimus dan Kordinator Komisariat Ikatan Mahasiswa Muhammadiyah (Korkom Unimus).
            </p>

            <p class="text-muted lh-lg">
                SEMA KM Unimus juga memiliki tanggung jawab yang sangat mulia yaitu sebagai lembaga yang menjalankan fungsi <strong>Controlling, Budgeting, Legislasi, dan Advokasi</strong> terhadap semua organisasi mahasiswa yang ada di lingkungan kampus Unimus.
            </p>

            <div class="mt-4 p-3 bg-white shadow-sm rounded-3 border">
                <h6 class="fw-bold text-dark mb-2"><i class="bi bi-geo-alt-fill text-danger"></i> Sekretariat:</h6>
                <p class="small text-muted mb-0">
                    Gedung Pusat Kegiatan Mahasiswa (PKM), Jalan Kedungmundu No.18, Tembalang, Semarang.
                </p>
            </div>
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
                    <p class="text-center text-muted lh-lg fs-5">"Menjadikan Senat Mahasiswa KM UNIMUS sebagai organisasi yang Demokratis, Berintegritas dan Inklusif"</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="card h-100 border-0 shadow-sm p-4 rounded-4" style="border-top: 5px solid var(--primary) !important;">
                    <div class="text-center mb-4">
                        <i class="bi bi-list-check text-primary fs-1"></i>
                        <h3 class="fw-bold mt-2">Misi</h3>
                    </div>
                    <ul class="text-muted lh-lg list-unstyled">
                        <li class="mb-3 d-flex"><i class="bi bi-check-circle-fill text-secondary me-3 mt-1"></i> Menjembatani aspirasi mahasiswa secara objektif dengan pihak terkait.</li>
                        <li class="mb-3 d-flex"><i class="bi bi-check-circle-fill text-secondary me-3 mt-1"></i> Menyusun, Mengkaji, dan Menetapkan peraturan mahasiswa yang demokratis sesuai dengan KM Unimus</li>
                        <li class="mb-3 d-flex"><i class="bi bi-check-circle-fill text-secondary me-3 mt-1"></i> Mengayomi seluruh Lembaga KM Unimus</li>
                        <li class="mb-3 d-flex"><i class="bi bi-check-circle-fill text-secondary me-3 mt-1"></i> Membina hubungan baik dengan seluruh Lembaga KM Unimus</li>
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

    <!-- Pimpinan: Ketua Umum -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-4 col-md-6 text-center" data-aos="zoom-in" data-aos-delay="100">
            <div class="card border-0 bg-transparent">
                <img src="{{ asset('images/ketua-sema.jpeg') }}" class="rounded-circle object-fit-cover mx-auto mb-3 shadow" style="width: 150px; height: 150px; border: 4px solid var(--secondary);" alt="Ketua Umum">
                <h5 class="fw-bold mb-1">Farhan Syafa Rianor Handoko</h5>
                <p class="text-primary fw-bold small text-uppercase">Ketua Umum 2025-2026</p>
            </div>
        </div>
    </div>

    <!-- Jajaran Wakil Ketua Umum & Bawahan -->
    <div class="row g-4 justify-content-center">
        <!-- Wakil Ketua Umum 1 -->
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card border-0 shadow-sm rounded-4 h-100 p-4 text-center" style="border-top: 4px solid var(--primary) !important;">
                <div class="mb-3">
                    <img src="{{ asset('images/wakil-ketua-1.png') }}" class="rounded-circle object-fit-cover mx-auto mb-3 shadow-sm" style="width: 100px; height: 100px; border: 3px solid var(--secondary);" alt="Wakil Ketua Umum I">
                    <h5 class="fw-bold text-dark mb-1">Arald Khautal Wijaya</h5>
                    <p class="text-primary fw-bold small text-uppercase mb-0">Wakil Ketua Umum I</p>
                </div>
                <hr class="text-muted opacity-25">
                <ul class="list-unstyled text-muted small text-start mb-0">
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>Badan Konstitusi</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>Sekretaris Jenderal</li>
                    <li><i class="bi bi-check-circle-fill text-secondary me-2"></i>Komisi VI</li>
                </ul>
            </div>
        </div>

        <!-- Wakil Ketua Umum 2 -->
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card border-0 shadow-sm rounded-4 h-100 p-4 text-center" style="border-top: 4px solid var(--primary) !important;">
                <div class="mb-3">
                    <img src="{{ asset('images/wakil-ketua-2.png') }}" class="rounded-circle object-fit-cover mx-auto mb-3 shadow-sm" style="width: 100px; height: 100px; border: 3px solid var(--secondary);" alt="Wakil Ketua Umum II">
                    <h5 class="fw-bold text-dark mb-1">Muhammad Pauger Alamsyah</h5>
                    <p class="text-primary fw-bold small text-uppercase mb-0">Wakil Ketua Umum II</p>
                </div>
                <hr class="text-muted opacity-25">
                <ul class="list-unstyled text-muted small text-start mb-0">
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>Badan Anggaran</li>
                    <!-- Menggunakan Komisi I sesuai urutan logis komisi atau Komisi II sesuai input. Sebagai kompromi/koreksi sesuai urutan file: -->
                    <li><i class="bi bi-check-circle-fill text-secondary me-2"></i>Komisi I</li>
                </ul>
            </div>
        </div>

        <!-- Wakil Ketua Umum 3 -->
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card border-0 shadow-sm rounded-4 h-100 p-4 text-center" style="border-top: 4px solid var(--primary) !important;">
                <div class="mb-3">
                    <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="bi bi-person-badge-fill fs-3"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-0">Wakil Ketua Umum III</h5>
                </div>
                <hr class="text-muted opacity-25">
                <ul class="list-unstyled text-muted small text-start mb-0">
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>BPI</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>Komisi II</li>
                    <li><i class="bi bi-check-circle-fill text-secondary me-2"></i>Komisi III</li>
                </ul>
            </div>
        </div>

        <!-- Wakil Ketua Umum 4 -->
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card border-0 shadow-sm rounded-4 h-100 p-4 text-center" style="border-top: 4px solid var(--primary) !important;">
                <div class="mb-3">
                    <img src="{{ asset('images/wakil-ketua-4.jpg') }}" class="rounded-circle object-fit-cover mx-auto mb-3 shadow-sm" style="width: 100px; height: 100px; border: 3px solid var(--secondary);" alt="Wakil Ketua Umum IV">
                    <h5 class="fw-bold text-dark mb-1">Hanum Ayu Lestari</h5>
                    <p class="text-primary fw-bold small text-uppercase mb-0">Wakil Ketua Umum IV</p>
                </div>
                <hr class="text-muted opacity-25">
                <ul class="list-unstyled text-muted small text-start mb-0">
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>Badan Legislasi</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>Komisi IV</li>
                    <li><i class="bi bi-check-circle-fill text-secondary me-2"></i>Komisi V</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
