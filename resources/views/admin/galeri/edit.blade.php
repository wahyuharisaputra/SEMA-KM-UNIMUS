@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Foto Galeri</h1>
    <a href="{{ route('admin.galeri.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('admin.galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Foto <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul', $galeri->judul) }}" required>
                @error('judul')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="album_id" class="form-label">Album Galeri <span class="text-danger">*</span></label>
                <select class="form-select @error('album_id') is-invalid @enderror" id="album_id" name="album_id" required>
                    <option value="">-- Pilih Album --</option>
                    @foreach($albums as $album)
                        <option value="{{ $album->id }}" {{ old('album_id', $galeri->album_id) == $album->id ? 'selected' : '' }}>
                            {{ $album->nama }}
                        </option>
                    @endforeach
                </select>
                @error('album_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label d-block">Foto Saat Ini</label>
                @if($galeri->file_foto)
                    <img src="{{ asset('storage/' . $galeri->file_foto) }}" alt="Foto" class="img-thumbnail mb-2" style="max-height: 200px;">
                @endif
                
                <label for="file_foto" class="form-label mt-2">Ganti Foto (Opsional)</label>
                <input class="form-control @error('file_foto') is-invalid @enderror" type="file" id="file_foto" name="file_foto" accept="image/*">
                <div class="form-text">Biarkan kosong jika tidak ingin mengubah foto. Maksimal 5MB. Format: JPG, PNG, JPEG.</div>
                @error('file_foto')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Perbarui Foto</button>
        </form>
    </div>
</div>
@endsection
