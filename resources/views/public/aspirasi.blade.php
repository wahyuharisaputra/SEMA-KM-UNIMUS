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
                                <label for="fakultas" class="form-label fw-bold text-muted">Tujuan Aspirasi (Organisasi) <span class="text-danger">*</span></label>
                                <select class="form-select form-select-lg bg-light border-0" id="fakultas" name="fakultas" required>
                                    <option value="" selected disabled>Pilih Tujuan Aspirasi...</option>
                                    
                                    <optgroup label="BEM Tingkat Universitas">
                                        <option value="BEM KM">BEM KM</option>
                                    </optgroup>

                                    <optgroup label="Fakultas Ekonomi dan Bisnis">
                                        <option value="BEM Fakultas Ekonomi dan Bisnis">BEM Fakultas Ekonomi dan Bisnis</option>
                                        <option value="HMJ Akuntansi (Himaksi)">HMJ Akuntansi (Himaksi)</option>
                                        <option value="HMJ Manajemen (HMJM)">HMJ Manajemen (HMJM)</option>
                                        <option value="HMJ Agribisnis (Himagri)">HMJ Agribisnis (Himagri)</option>
                                    </optgroup>

                                    <optgroup label="Fakultas Kesehatan Masyarakat">
                                        <option value="BEM Fakultas Kesehatan Masyarakat">BEM Fakultas Kesehatan Masyarakat</option>
                                        <option value="HMJ Ilmu Keolahragaan (Hima Ikor)">HMJ Ilmu Keolahragaan (Hima Ikor)</option>
                                        <option value="HMJ S1 Kesehatan Masyarakat (Himakesmas)">HMJ S1 Kesehatan Masyarakat (Himakesmas)</option>
                                    </optgroup>

                                    <optgroup label="Fakultas Ilmu Pendidikan dan Humaniora">
                                        <option value="BEM Fakultas Ilmu Pendidikan dan Humaniora">BEM Fakultas Ilmu Pendidikan dan Humaniora</option>
                                        <option value="HMJ Sastra Inggris (Himaprosa)">HMJ Sastra Inggris (Himaprosa)</option>
                                        <option value="HMJ Pendidikan Bahasa Inggris (Himapbi)">HMJ Pendidikan Bahasa Inggris (Himapbi)</option>
                                        <option value="HMJ Pendidikan Kimia (Himadikmia)">HMJ Pendidikan Kimia (Himadikmia)</option>
                                        <option value="HMJ Pendidikan Matematika (Himatika)">HMJ Pendidikan Matematika (Himatika)</option>
                                    </optgroup>

                                    <optgroup label="Fakultas Sains dan Teknologi Pangan">
                                        <option value="BEM Fakultas Sains dan Teknologi Pangan">BEM Fakultas Sains dan Teknologi Pangan</option>
                                        <option value="HMJ Statistika (Himasta)">HMJ Statistika (Himasta)</option>
                                        <option value="HMJ Sains Data (Himasda)">HMJ Sains Data (Himasda)</option>
                                        <option value="HMJ Teknologi Pangan (Himatepa)">HMJ Teknologi Pangan (Himatepa)</option>
                                        <option value="HMJ Ilmu Kelautan (HMIK)">HMJ Ilmu Kelautan (HMIK)</option>
                                    </optgroup>

                                    <optgroup label="Fakultas Ilmu Keperawatan dan Kesehatan">
                                        <option value="BEM Fakultas Ilmu Keperawatan dan Kesehatan">BEM Fakultas Ilmu Keperawatan dan Kesehatan</option>
                                        <option value="HMJ S1 Keperawatan (Himapersa)">HMJ S1 Keperawatan (Himapersa)</option>
                                        <option value="HMJ D3 Keperawatan (Himadeka)">HMJ D3 Keperawatan (Himadeka)</option>
                                        <option value="HMJ STr TLM">HMJ STr TLM</option>
                                        <option value="HMJ D3 TLM">HMJ D3 TLM</option>
                                        <option value="HMJ Kebidanan (Himabidan)">HMJ Kebidanan (Himabidan)</option>
                                        <option value="HMJ Gizi (Himagi)">HMJ Gizi (Himagi)</option>
                                    </optgroup>

                                    <optgroup label="Fakultas Teknik dan Ilmu Komputer">
                                        <option value="BEM Fakultas Teknik dan Ilmu Komputer">BEM Fakultas Teknik dan Ilmu Komputer</option>
                                        <option value="HMJ Teknik Mesin (HMTM)">HMJ Teknik Mesin (HMTM)</option>
                                        <option value="HMJ Teknik Elektro (Himatikro)">HMJ Teknik Elektro (Himatikro)</option>
                                        <option value="HMJ Informatika (Himafor)">HMJ Informatika (Himafor)</option>
                                        <option value="HMJ Rekayasa Sipil (HMRS)">HMJ Rekayasa Sipil (HMRS)</option>
                                        <option value="HMJ Arsitektur (HMA)">HMJ Arsitektur (HMA)</option>
                                        <option value="HMJ Teknologi Informasi (HMTI)">HMJ Teknologi Informasi (HMTI)</option>
                                    </optgroup>

                                    <optgroup label="Fakultas Kedokteran & Kedokteran Gigi">
                                        <option value="BEM Fakultas Kedokteran">BEM Fakultas Kedokteran</option>
                                        <option value="BEM Fakultas Kedokteran Gigi">BEM Fakultas Kedokteran Gigi</option>
                                    </optgroup>

                                    <optgroup label="Unit Kegiatan Mahasiswa (UKM) & Ekstra">
                                        <option value="UKM Seni">UKM Seni</option>
                                        <option value="UKM PSM">UKM PSM</option>
                                        <option value="UKM Mapala">UKM Mapala</option>
                                        <option value="UKM Pramuka Putra">UKM Pramuka Putra</option>
                                        <option value="UKM Pramuka Putri">UKM Pramuka Putri</option>
                                        <option value="UKM Olahraga">UKM Olahraga</option>
                                        <option value="UKM Tapak Suci">UKM Tapak Suci</option>
                                        <option value="UKM Komunikasi">UKM Komunikasi</option>
                                        <option value="UKM GEMA">UKM GEMA</option>
                                        <option value="UKM HW">UKM HW</option>
                                        <option value="UKM Gonimus">UKM Gonimus</option>
                                        <option value="UKM KWU">UKM KWU</option>
                                        <option value="UKM Tilawatil Qur'an">UKM Tilawatil Qur'an</option>
                                        <option value="Menwa">Menwa</option>
                                    </optgroup>
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
