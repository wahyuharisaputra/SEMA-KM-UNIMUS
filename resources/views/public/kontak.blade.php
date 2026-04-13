@extends('public.layouts.app')
@section('title', 'Kontak Kami')
@section('content')
<div class="bg-primary text-white py-5">
    <div class="container text-center py-4">
        <h1 class="display-5 fw-bold" data-aos="fade-down">Hubungi Kami</h1>
        <p class="lead text-white-50" data-aos="fade-up">Punya pertanyaan kerja sama atau informasi lebih lanjut?</p>
    </div>
</div>
<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
            <h3 class="fw-bold mb-4">Informasi Kontak</h3>
            <ul class="list-unstyled lh-lg fs-5 text-muted">
                <li class="mb-3"><i class="bi bi-geo-alt-fill text-primary me-3 fs-4"></i> Gedung Rektorat UNIMUS Lt. 1</li>
                <li class="mb-3"><i class="bi bi-envelope-fill text-primary me-3 fs-4"></i> infosema@unimus.ac.id</li>
                <li class="mb-3"><i class="bi bi-telephone-fill text-primary me-3 fs-4"></i> +62 812 3456 7890</li>
            </ul>
        </div>
        <div class="col-lg-6" data-aos="fade-left">
            <div class="card border-0 shadow-lg p-5 rounded-4">
                @if(session('success'))
                    <div class="alert alert-success border-0 shadow-sm rounded-4 mb-4" role="alert" data-aos="fade-down">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-check-circle-fill fs-4 me-3"></i>
                            <div>
                                <h6 class="alert-heading fw-bold mb-1">Berhasil Terkirim!</h6>
                                <p class="mb-0 small">{{ session('success') }}</p>
                            </div>
                        </div>
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger border-0 shadow-sm rounded-4 mb-4" role="alert">
                        <ul class="mb-0 small">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('kontak.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label fw-bold text-muted">Nama Anda</label>
                        <input type="text" class="form-control bg-light border-0" id="nama" name="nama" value="{{ old('nama') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold text-muted">Email Anda</label>
                        <input type="email" class="form-control bg-light border-0" id="email" name="email" value="{{ old('email') }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="pesan" class="form-label fw-bold text-muted">Pesan</label>
                        <textarea class="form-control bg-light border-0" id="pesan" name="pesan" rows="5" required>{{ old('pesan') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-3 fw-bold rounded-pill shadow">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
