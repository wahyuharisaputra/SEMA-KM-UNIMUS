@extends('public.layouts.app')

@section('title', 'Berita & Artikel')

@section('content')
<!-- Page Header -->
<div class="bg-primary text-white py-5" style="background: linear-gradient(135deg, var(--primary) 0%, rgba(15,23,42,1) 100%);">
    <div class="container text-center py-4">
        <h1 class="display-5 fw-bold" data-aos="fade-down">Berita & Publikasi</h1>
        <p class="lead text-white-50" data-aos="fade-up" data-aos-delay="100">Kumpulan informasi, berita terbaru, dan opini terkini</p>
    </div>
</div>

<div class="container py-5">
    <div class="row g-4">
        <!-- Main Content -->
        <div class="col-lg-8">
            <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-2">
                <h4 class="fw-bold text-dark mb-0">Artikel Terbaru</h4>
            </div>

            <!-- List Berita Dummy -->
            <div class="card mb-4 border-0 shadow-sm rounded-4 overflow-hidden" data-aos="fade-up">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="img-fluid rounded-start h-100 object-fit-cover" alt="Berita">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body p-4">
                            <span class="badge bg-secondary text-dark mb-2">Kegiatan</span>
                            <h5 class="card-title fw-bold">Pelantikan Raya Organisasi Mahasiswa UNIMUS 2026 Berlangsung Khidmat</h5>
                            <p class="card-text text-muted small mb-2"><i class="bi bi-calendar3"></i> 10 April 2026 • Oleh: Admin</p>
                            <p class="card-text text-muted text-limit-3">Rektor UNIMUS secara resmi melantik jajaran kepengurusan tingkat universitas, termasuk Senat Mahasiswa (SEMA)...</p>
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-pill mt-2">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card mb-4 border-0 shadow-sm rounded-4 overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="img-fluid rounded-start h-100 object-fit-cover" alt="Berita">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body p-4">
                            <span class="badge bg-primary text-white mb-2">Advokasi</span>
                            <h5 class="card-title fw-bold">Audiensi SEMA dengan Rektorat Tekait Fasilitas Kampus Terpadu</h5>
                            <p class="card-text text-muted small mb-2"><i class="bi bi-calendar3"></i> 05 April 2026 • Oleh: Admin</p>
                            <p class="card-text text-muted text-limit-3">SEMA KM UNIMUS berhasil mengawal perbaikan fasilitas ruang kelas dan tempat ibadah melalui mekanisme audiensi komprehensif...</p>
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-pill mt-2">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination Dummy -->
            <nav aria-label="Page navigation" class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link border-0 shadow-sm rounded-circle mx-1" href="#" tabindex="-1" aria-disabled="true"><i class="bi bi-chevron-left"></i></a>
                    </li>
                    <li class="page-item"><a class="page-link border-0 shadow-sm rounded-circle mx-1 active bg-primary text-white" href="#">1</a></li>
                    <li class="page-item"><a class="page-link border-0 shadow-sm rounded-circle mx-1" href="#">2</a></li>
                    <li class="page-item"><a class="page-link border-0 shadow-sm rounded-circle mx-1" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link border-0 shadow-sm rounded-circle mx-1" href="#"><i class="bi bi-chevron-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4" data-aos="fade-left">
            <div class="card border-0 shadow-sm rounded-4 mb-4">
                <div class="card-body p-4">
                    <h5 class="fw-bold border-bottom pb-2 mb-3">Pencarian</h5>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari berita..." aria-label="Cari berita">
                            <button class="btn btn-primary" type="button"><i class="bi bi-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card border-0 shadow-sm rounded-4 mb-4">
                <div class="card-body p-4">
                    <h5 class="fw-bold border-bottom pb-2 mb-3">Kategori</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent px-0 border-0">
                            <a href="#" class="text-decoration-none text-muted"><i class="bi bi-chevron-right me-2 text-secondary"></i>Kegiatan</a>
                            <span class="badge bg-light text-dark rounded-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent px-0 border-0">
                            <a href="#" class="text-decoration-none text-muted"><i class="bi bi-chevron-right me-2 text-secondary"></i>Advokasi</a>
                            <span class="badge bg-light text-dark rounded-pill">8</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent px-0 border-0">
                            <a href="#" class="text-decoration-none text-muted"><i class="bi bi-chevron-right me-2 text-secondary"></i>Pengumuman</a>
                            <span class="badge bg-light text-dark rounded-pill">5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent px-0 border-0">
                            <a href="#" class="text-decoration-none text-muted"><i class="bi bi-chevron-right me-2 text-secondary"></i>Opini</a>
                            <span class="badge bg-light text-dark rounded-pill">12</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
