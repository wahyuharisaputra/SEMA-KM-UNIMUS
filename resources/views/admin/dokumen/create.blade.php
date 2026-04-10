@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">Upload Dokumen Baru</h1>
    <a href="{{ route('admin.dokumen.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('admin.dokumen.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Dokumen <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul') }}" required>
                @error('judul')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="file_dokumen" class="form-label">File Dokumen <span class="text-danger">*</span></label>
                <input class="form-control @error('file_dokumen') is-invalid @enderror" type="file" id="file_dokumen" name="file_dokumen" required>
                <div class="form-text">Maksimal ukuran file: 10MB. Format: PDF, DOC, DOCX, XLS, XLSX.</div>
                @error('file_dokumen')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary"><i class="bi bi-upload"></i> Upload Dokumen</button>
        </form>
    </div>
</div>
@endsection
