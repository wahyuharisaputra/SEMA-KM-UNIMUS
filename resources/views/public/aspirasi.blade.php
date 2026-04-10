@extends('public.layouts.app')

@section('title', 'Aspirasi Mahasiswa')

@section('content')
<!-- Page Header -->
<div class="bg-primary text-white py-5" style="background: linear-gradient(135deg, var(--primary) 0%, rgba(15,23,42,1) 100%);">
    <div class="container text-center py-4">
        <h1 class="display-5 fw-bold" data-aos="fade-down">Aspirasi Mahasiswa</h1>
        <p class="lead text-white-50" data-aos="fade-up" data-aos-delay="100">Suaramu sangat berarti untuk kemajuan kampus tercinta</p>
    </div>
</div>

<div class="container py-5 my-3">
    <div class="row justify-content-center">
        <div class="col-lg-8" data-aos="fade-up">
            <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                <div class="card-body p-5">
                    <div class="text-center mb-5">
                        <i class="bi bi-chat-dots-fill text-secondary fs-1 mb-3 d-inline-block p-3 bg-light rounded-circle"></i>
                        <h3 class="fw-bold text-dark">Sampaikan Aspirasimu!</h3>
                        <p class="text-muted">Isi formulir di bawah ini dengan bijak dan bertanggung jawab. Data Anda akan kami lindungi kerahasiaannya.</p>
                    </div>

                    <form action="#" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6 mb-3">
                                <label for="nama" class="form-label fw-bold text-muted">Nama Lengkap (Opsional)</label>
                                <input type="text" class="form-control form-control-lg bg-light border-0" id="nama" name="nama" placeholder="Boleh dikosongkan/anonim">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="fakultas" class="form-label fw-bold text-muted">Fakultas / Program Studi <span class="text-danger">*</span></label>
                                <select class="form-select form-select-lg bg-light border-0" id="fakultas" name="fakultas" required>
                                    <option value="" selected disabled>Pilih Fakultas...</option>
                                    <option value="FT">Fakultas Teknik</option>
                                    <option value="FK">Fakultas Kedokteran</option>
                                    <option value="FKM">Fakultas Kesehatan Masyarakat</option>
                                    <option value="FIK">Fakultas Ilmu Keperawatan & Kesehatan</option>
                                    <option value="FE">Fakultas Ekonomi</option>
                                    <option value="FBS">Fakultas Bahasa & Sains</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="isi_aspirasi" class="form-label fw-bold text-muted">Isi Aspirasi / Keluhan / Saran <span class="text-danger">*</span></label>
                            <textarea class="form-control form-control-lg bg-light border-0" id="isi_aspirasi" name="isi_aspirasi" rows="6" placeholder="Ceritakan permasalahan fasilitas, akademik, atau saran untuk kampus..." required></textarea>
                        </div>
                        
                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-custom btn-lg fw-bold py-3">
                                Kirim Aspirasi <i class="bi bi-send-fill ms-2"></i>
                            </button>
                        </div>
                        <p class="text-center text-muted small mt-3"><i class="bi bi-shield-lock-fill text-success me-1"></i> Data aspirasi Anda dienkripsi dan langsung diterima oleh Komisi II SEMA KM.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
