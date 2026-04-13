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
        @forelse($beritas as $item)
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden news-card">
                @if($item->gambar)
                    <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top object-fit-cover" style="height: 220px;" alt="{{ $item->judul }}">
                @else
                    <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="card-img-top object-fit-cover" style="height: 220px;" alt="Default News">
                @endif
                <div class="card-body p-4 bg-white">
                    <div class="text-muted small mb-2">
                        <i class="bi bi-calendar3 me-1"></i> {{ $item->created_at->format('d F Y') }}
                        @if($item->kategori)
                            <span class="ms-2 badge bg-light text-primary">{{ $item->kategori->nama }}</span>
                        @endif
                    </div>
                    <h5 class="card-title fw-bold text-dark mb-3">{{ $item->judul }}</h5>
                    <p class="card-text text-muted small mb-4">{{ Str::limit(strip_tags($item->konten), 150) }}</p>
                    <a href="#" class="text-secondary fw-bold text-decoration-none small">Baca Selengkapnya <i class="bi bi-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center py-5" data-aos="fade-up">
            <div class="mb-4">
                <i class="bi bi-newspaper text-white-50 opacity-25" style="font-size: 5rem;"></i>
            </div>
            <h3 class="text-muted fw-light">Belum Ada Berita</h3>
            <p class="text-muted">Maaf, saat ini belum ada berita atau artikel yang dipublikasikan.</p>
        </div>
        @endforelse
    </div>

    <!-- Berita Lainnya (Scrollable/Pagination) -->
    <div class="mt-5 d-flex justify-content-center">
        {{ $beritas->links('pagination::bootstrap-5') }}
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
