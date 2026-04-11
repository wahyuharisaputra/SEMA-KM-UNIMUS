@extends('public.layouts.app')

@section('title', 'Berita & Artikel')

@section('content')
<!-- Page Header -->
<div class="bg-primary text-white py-5" style="background: linear-gradient(135deg, var(--primary) 0%, rgba(15,23,42,1) 100%);">
    <div class="container text-center py-4">
        <h1 class="display-5 fw-bold" data-aos="fade-down">Berita & Publikasi</h1>
        <p class="lead text-white-50" data-aos="fade-up" data-aos-delay="100">Kumpulan informasi, berita terbaru, dan opini terkini dari SEMA KM UNIMUS</p>
    </div>
</div>

<div class="container py-5">
    <!-- List Berita Grid -->
    <div class="row g-4 justify-content-center">
        <!-- Dummy data matching image -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden news-card">
                <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="card-img-top object-fit-cover" style="height: 220px;" alt="Berita">
                <div class="card-body p-4 bg-white">
                    <div class="text-muted small mb-2"><i class="bi bi-calendar3 me-1"></i> 10 April 2026</div>
                    <h5 class="card-title fw-bold text-dark mb-3">Pelantikan Raya Organisasi Mahasiswa UNIMUS 2026 Berlangsung Khidmat</h5>
                    <p class="card-text text-muted small mb-4">Rektor UNIMUS secara resmi melantik jajaran kepengurusan tingkat universitas, termasuk Senat Mahasiswa (SEMA)...</p>
                    <a href="#" class="text-secondary fw-bold text-decoration-none small">Baca Selengkapnya <i class="bi bi-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden news-card">
                <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="card-img-top object-fit-cover" style="height: 220px;" alt="Berita">
                <div class="card-body p-4 bg-white">
                    <div class="text-muted small mb-2"><i class="bi bi-calendar3 me-1"></i> 05 April 2026</div>
                    <h5 class="card-title fw-bold text-dark mb-3">Audiensi SEMA dengan Rektorat Tekait Fasilitas Kampus Terpadu</h5>
                    <p class="card-text text-muted small mb-4">SEMA KM UNIMUS berhasil mengawal perbaikan fasilitas ruang kelas dan tempat ibadah melalui mekanisme audiensi komprehensif...</p>
                    <a href="#" class="text-secondary fw-bold text-decoration-none small">Baca Selengkapnya <i class="bi bi-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden news-card">
                <img src="https://images.unsplash.com/photo-1540317580384-e5d43616b9aa?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="card-img-top object-fit-cover" style="height: 220px;" alt="Berita">
                <div class="card-body p-4 bg-white">
                    <div class="text-muted small mb-2"><i class="bi bi-calendar3 me-1"></i> 02 April 2026</div>
                    <h5 class="card-title fw-bold text-dark mb-3">Open Recruitment Staff Magang SEMA KM Tahun 2026 Resmi Dibuka</h5>
                    <p class="card-text text-muted small mb-4">Kesempatan bagi mahasiswa baru lintas program studi untuk bergabung mempelajari pergerakan legislatif mahasiswa...</p>
                    <a href="#" class="text-secondary fw-bold text-decoration-none small">Baca Selengkapnya <i class="bi bi-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Berita Lainnya (Scrollable/Pagination) -->
    <div class="mt-5 text-center">
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link border-0 shadow-sm rounded-circle mx-1" href="#" tabindex="-1" aria-disabled="true"><i class="bi bi-chevron-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link border-0 shadow-sm rounded-circle mx-1" href="#">1</a></li>
                <li class="page-item"><a class="page-link border-0 shadow-sm rounded-circle mx-1" href="#">2</a></li>
                <li class="page-item"><a class="page-link border-0 shadow-sm rounded-circle mx-1" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link border-0 shadow-sm rounded-circle mx-1" href="#"><i class="bi bi-chevron-right"></i></a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<style>
    .news-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .news-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.1) !important;
    }
    .pagination .page-link {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary);
    }
    .pagination .page-item.active .page-link {
        background-color: var(--primary);
        color: white;
    }
</style>
@endsection
