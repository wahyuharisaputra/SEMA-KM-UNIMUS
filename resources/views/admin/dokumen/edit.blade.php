@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Dokumen</h1>
    <a href="{{ route('admin.dokumen.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('admin.dokumen.update', $dokuman->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Dokumen <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul', $dokuman->judul) }}" required>
                @error('judul')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label class="form-label d-block">Dokumen Saat Ini</label>
                <a href="{{ asset('storage/' . $dokuman->file_dokumen) }}" target="_blank" class="btn btn-sm btn-info mb-2 text-white">
                    <i class="bi bi-file-earmark"></i> Lihat / Unduh Dokumen ({{ $dokuman->tipe }})
                </a>
                
                <label for="file_dokumen" class="form-label mt-2">Ganti File Dokumen (Opsional)</label>
                <input class="form-control @error('file_dokumen') is-invalid @enderror" type="file" id="file_dokumen" name="file_dokumen">
                <div class="form-text">Biarkan kosong jika tidak ingin mengubah file. Maksimal 10MB. Format: PDF, DOC, DOCX, XLS, XLSX.</div>
                @error('file_dokumen')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Perbarui Dokumen</button>
        </form>
    </div>
</div>
@endsection
