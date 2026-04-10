@extends('public.layouts.app')

@section('title', 'Agenda Organisasi')

@section('content')
<!-- Page Header -->
<div class="bg-primary text-white py-5" style="background: linear-gradient(135deg, var(--primary) 0%, rgba(15,23,42,1) 100%);">
    <div class="container text-center py-4">
        <h1 class="display-5 fw-bold" data-aos="fade-down">Agenda Organisasi</h1>
        <p class="lead text-white-50" data-aos="fade-up" data-aos-delay="100">Daftar inisiatif dan kegiatan unggulan SEMA KM UNIMUS periode ini</p>
    </div>
</div>

<div class="container py-5">
    <div class="row g-4 mb-5">
        <div class="col-lg-12">
            <h2 class="section-title">Status Pelaksanaan Program</h2>
            <div class="table-responsive" data-aos="fade-up">
                <table class="table table-hover align-middle border shadow-sm rounded-4 overflow-hidden" style="border-radius: 1rem; border-collapse: collapse;">
                    <thead class="bg-light text-primary">
                        <tr>
                            <th class="py-3 px-4 border-0">Nama Agenda</th>
                            <th class="py-3 px-4 border-0">Divisi / Komisi</th>
                            <th class="py-3 px-4 border-0">Timeline</th>
                            <th class="py-3 px-4 border-0">Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr>
                            <td class="py-3 px-4 fw-bold">Sekolah Legislatif</td>
                            <td class="py-3 px-4 text-muted">Komisi I: Legislasi</td>
                            <td class="py-3 px-4 text-muted"><i class="bi bi-calendar-event me-2"></i>Mei 2026</td>
                            <td class="py-3 px-4">
                                <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill"><i class="bi bi-check-circle me-1"></i> Selesai</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 fw-bold">Serap Aspirasi Akbar</td>
                            <td class="py-3 px-4 text-muted">Komisi II: Aspirasi</td>
                            <td class="py-3 px-4 text-muted"><i class="bi bi-calendar-event me-2"></i>Juni 2026</td>
                            <td class="py-3 px-4">
                                <span class="badge bg-warning-subtle text-warning px-3 py-2 rounded-pill"><i class="bi bi-arrow-repeat me-1"></i> Berjalan</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 fw-bold">Amandemen UU KM</td>
                            <td class="py-3 px-4 text-muted">Komisi I: Legislasi</td>
                            <td class="py-3 px-4 text-muted"><i class="bi bi-calendar-event me-2"></i>Agustus 2026</td>
                            <td class="py-3 px-4">
                                <span class="badge bg-secondary-subtle text-secondary px-3 py-2 rounded-pill"><i class="bi bi-clock me-1"></i> Perencanaan</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 fw-bold">Sidang Paripurna Tengah Tahun</td>
                            <td class="py-3 px-4 text-muted">BPH</td>
                            <td class="py-3 px-4 text-muted"><i class="bi bi-calendar-event me-2"></i>September 2026</td>
                            <td class="py-3 px-4">
                                <span class="badge bg-secondary-subtle text-secondary px-3 py-2 rounded-pill"><i class="bi bi-clock me-1"></i> Perencanaan</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
