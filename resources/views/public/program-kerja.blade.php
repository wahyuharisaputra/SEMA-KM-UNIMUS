@extends('public.layouts.app')

@section('title', 'Agenda Organisasi')

@section('content')
<!-- Page Header -->
<div class="bg-primary text-white py-5" style="background: linear-gradient(135deg, var(--primary) 0%, rgba(15,23,42,1) 100%);">
    <div class="container text-center py-4">
        <h1 class="display-5 fw-bold" data-aos="fade-down">Agenda Organisasi</h1>
        <p class="lead text-white-50" data-aos="fade-up" data-aos-delay="100">Daftar inisiatif dan kegiatan unggulan SEMA KM UNIMUS dari periode ke periode</p>
    </div>
</div>

<div class="container py-5">
    <!-- Search & Filter Area -->
    <div class="mb-5" data-aos="fade-up">
        <div class="row g-3 justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded-4 p-2">
                    <ul class="nav nav-pills nav-fill" id="agenda-tab" role="tablist">
                        @php
                            $targetPeriodes = ['2023-2024', '2024-2025', '2025-2026'];
                            // Ensure the keys are sorted or at least match the requested filter
                            $availablePeriodes = $agendasByPeriode->keys()->toArray();
                            $allPeriodes = array_unique(array_merge($targetPeriodes, $availablePeriodes));
                            sort($allPeriodes);
                        @endphp
                        
                        @php
                            // Determine which tab should be active
                            // Logic: The first period in $allPeriodes that exists in $agendasByPeriode
                            $activePeriode = null;
                            foreach(array_reverse($allPeriodes) as $p) {
                                if(isset($agendasByPeriode[$p])) {
                                    $activePeriode = $p;
                                    break;
                                }
                            }
                            if(!$activePeriode && !empty($allPeriodes)) $activePeriode = end($allPeriodes);
                        @endphp
                        
                        @foreach($allPeriodes as $periode)
                            <li class="nav-item" role="presentation">
                                <button class="nav-link {{ $periode == $activePeriode ? 'active' : '' }} fw-bold rounded-pill mx-1" 
                                        id="tab-{{ Str::slug($periode) }}" 
                                        data-bs-toggle="pill" 
                                        data-bs-target="#content-{{ Str::slug($periode) }}" 
                                        type="button" role="tab">
                                    {{ $periode }}
                                </button>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Tab Content -->
    @if(isset($agendasByPeriode) && $agendasByPeriode->count() > 0)
        <div class="tab-content" id="agenda-tabContent" data-aos="fade-up" data-aos-delay="100">
            @foreach($allPeriodes as $periode)
                <div class="tab-pane fade {{ $periode == $activePeriode ? 'show active' : '' }}" id="content-{{ Str::slug($periode) }}" role="tabpanel">
                    @if(isset($agendasByPeriode[$periode]))
                        <div class="row g-4">
                            @foreach($agendasByPeriode[$periode] as $agenda)
                                <div class="col-lg-4 col-md-6">
                                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden transition-all hover-lift">
                                        <!-- Card Image -->
                                        <div class="position-relative">
                                            @if($agenda->fotos && count($agenda->fotos) > 0)
                                                <img src="{{ asset('storage/' . $agenda->fotos[0]) }}" class="card-img-top object-fit-cover" style="height: 220px;" alt="{{ $agenda->nama }}">
                                            @else
                                                <div class="bg-light d-flex align-items-center justify-content-center text-muted" style="height: 220px;">
                                                    <i class="bi bi-calendar-event fs-1 opacity-25"></i>
                                                </div>
                                            @endif
                                            <span class="position-absolute top-0 start-0 m-3 badge bg-primary rounded-pill px-3">{{ $agenda->divisi->nama ?? 'Umum' }}</span>
                                        </div>

                                        <!-- Card Body -->
                                        <div class="card-body p-4">
                                            <div class="text-muted small mb-2">
                                                <i class="bi bi-calendar3 me-1 text-primary"></i> 
                                                {{ $agenda->timeline_start ? $agenda->timeline_start->format('d F Y') : 'Menyusul' }}
                                            </div>
                                            <h5 class="card-title fw-bold text-dark mb-3">{{ $agenda->nama }}</h5>
                                            <p class="card-text text-muted small mb-4">
                                                {{ Str::limit($agenda->deskripsi, 120) }}
                                            </p>
                                            
                                            <div class="d-flex justify-content-between align-items-center mt-auto pt-3 border-top">
                                                <a href="#" class="text-secondary fw-bold text-decoration-none small d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#modal-{{ $agenda->id }}">
                                                    Baca Selengkapnya <i class="bi bi-arrow-right ms-2"></i>
                                                </a>
                                                
                                                @if($agenda->fotos && count($agenda->fotos) > 0)
                                                    <span class="badge bg-light text-primary border rounded-pill">
                                                        <i class="bi bi-camera me-1"></i> {{ count($agenda->fotos) }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center py-5">
                            <i class="bi bi-folder2-open display-4 text-muted opacity-25"></i>
                            <h5 class="text-muted mt-3">Belum ada agenda terdaftar untuk periode {{ $periode }}</h5>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>

        <!-- Section Khusus Modal (Di luar Grid) -->
        @foreach($agendasByPeriode as $periode => $agendas)
            @foreach($agendas as $agenda)
                <div class="modal fade" id="modal-{{ $agenda->id }}" tabindex="-1" aria-labelledby="label-{{ $agenda->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content border-0 shadow-lg rounded-4">
                            <div class="modal-header border-0 pb-0">
                                <h5 class="modal-title fw-bold text-primary" id="label-{{ $agenda->id }}">{{ $agenda->nama }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4 pt-2">
                                <div class="mb-4 text-muted small">
                                    <span class="me-3"><i class="bi bi-building me-1"></i> {{ $agenda->divisi->nama ?? 'Divisi Utama' }}</span>
                                    <span><i class="bi bi-calendar3 me-1"></i> Periode {{ $agenda->periode }}</span>
                                </div>
                                
                                <h6 class="fw-bold mb-2">Deskripsi Kegiatan:</h6>
                                <p class="text-muted" style="white-space: pre-line;">{{ $agenda->deskripsi }}</p>
                                
                                @if($agenda->tujuan)
                                    <h6 class="fw-bold mb-2 mt-4">Tujuan Utama:</h6>
                                    <p class="text-muted">{{ $agenda->tujuan }}</p>
                                @endif

                                @if($agenda->fotos && count($agenda->fotos) > 0)
                                    <h6 class="fw-bold mb-3 mt-4">Dokumentasi & Pamflet:</h6>
                                    <div class="row g-3">
                                        @foreach($agenda->fotos as $foto)
                                            <div class="col-md-6 col-lg-4">
                                                <a href="{{ asset('storage/' . $foto) }}" target="_blank">
                                                    <img src="{{ asset('storage/' . $foto) }}" class="img-fluid rounded-3 shadow-sm hover-zoom" alt="Foto Agenda">
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="modal-footer border-0">
                                <button type="button" class="btn btn-light rounded-pill px-4" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach

    @else
        <div class="text-center py-5" data-aos="fade-up">
            <h4 class="text-muted">Belum ada data agenda yang dipublikasikan.</h4>
        </div>
    @endif
</div>

<style>
    .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .hover-lift:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.1) !important;
    }
    .nav-pills .nav-link.active {
        background-color: var(--secondary);
        color: var(--dark);
    }
    .nav-pills .nav-link {
        color: var(--primary);
    }
</style>
@endsection
