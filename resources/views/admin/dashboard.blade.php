@extends('admin.layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard Statistik</h1>
</div>

<div class="row">
    <!-- Berita Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary h-100 py-2" style="border-left: 4px solid #4e73df;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs fw-bold text-primary text-uppercase mb-1">
                            Total Berita</div>
                        <div class="h5 mb-0 fw-bold text-gray-800">0</div>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-newspaper fs-2 text-secondary opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Proker Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success h-100 py-2" style="border-left: 4px solid #1cc88a;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs fw-bold text-success text-uppercase mb-1">
                            Program Kerja</div>
                        <div class="h5 mb-0 fw-bold text-gray-800">0</div>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-calendar-check fs-2 text-secondary opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Aspirasi Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info h-100 py-2" style="border-left: 4px solid #36b9cc;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs fw-bold text-info text-uppercase mb-1">Aspirasi Masuk
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 fw-bold text-gray-800">0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-chat-square-text fs-2 text-secondary opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pesan Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning h-100 py-2" style="border-left: 4px solid #f6c23e;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs fw-bold text-warning text-uppercase mb-1">
                            Pesan Kontak</div>
                        <div class="h5 mb-0 fw-bold text-gray-800">0</div>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-envelope fs-2 text-secondary opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 fw-bold text-primary">Selamat Datang di Admin Panel SEMA KM UNIMUS</h6>
            </div>
            <div class="card-body">
                <p>Gunakan menu di sebelah kiri untuk mengelola konten website publik SEMA KM UNIMUS. Anda dapat menambahkan berita terbaru, program kerja, mengelola anggota struktural, serta meninjau aspirasi dari mahasiswa.</p>
            </div>
        </div>
    </div>
</div>
@endsection
