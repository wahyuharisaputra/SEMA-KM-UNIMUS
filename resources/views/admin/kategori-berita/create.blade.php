@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Kategori Berita</h1>
    <a href="{{ route('admin.kategori-berita.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('admin.kategori-berita.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Kategori <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <small class="text-muted">Slug akan degenerate secara otomatis dari nama kategori.</small>
            </div>
            
            <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Simpan Kategori</button>
        </form>
    </div>
</div>
@endsection
