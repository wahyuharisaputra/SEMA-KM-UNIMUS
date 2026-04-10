@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Program Kerja</h1>
    <a href="{{ route('admin.program-kerja.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('admin.program-kerja.store') }}" method="POST">
            @csrf
            
            <div class="row">
                <div class="col-md-8">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Program Kerja <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" rows="3">{{ old('deskripsi') }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="tujuan" class="form-label">Tujuan</label>
                        <textarea class="form-control @error('tujuan') is-invalid @enderror" id="tujuan" name="tujuan" rows="3">{{ old('tujuan') }}</textarea>
                        @error('tujuan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="divisi_id" class="form-label">Divisi Penanggung Jawab <span class="text-danger">*</span></label>
                        <select class="form-select @error('divisi_id') is-invalid @enderror" id="divisi_id" name="divisi_id" required>
                            <option value="">-- Pilih Divisi --</option>
                            @foreach($divisis as $divisi)
                                <option value="{{ $divisi->id }}" {{ old('divisi_id') == $divisi->id ? 'selected' : '' }}>
                                    {{ $divisi->nama }}
                                </option>
                            @endforeach
                        </select>
                        @error('divisi_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="status_pelaksanaan" class="form-label">Status <span class="text-danger">*</span></label>
                        <select class="form-select @error('status_pelaksanaan') is-invalid @enderror" id="status_pelaksanaan" name="status_pelaksanaan" required>
                            <option value="perencanaan" {{ old('status_pelaksanaan') == 'perencanaan' ? 'selected' : '' }}>Perencanaan</option>
                            <option value="berjalan" {{ old('status_pelaksanaan') == 'berjalan' ? 'selected' : '' }}>Berjalan</option>
                            <option value="selesai" {{ old('status_pelaksanaan') == 'selesai' ? 'selected' : '' }}>Selesai</option>
                        </select>
                        @error('status_pelaksanaan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="timeline_start" class="form-label">Mulai (Opsional)</label>
                            <input type="date" class="form-control @error('timeline_start') is-invalid @enderror" id="timeline_start" name="timeline_start" value="{{ old('timeline_start') }}">
                            @error('timeline_start')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="timeline_end" class="form-label">Selesai (Opsional)</label>
                            <input type="date" class="form-control @error('timeline_end') is-invalid @enderror" id="timeline_end" name="timeline_end" value="{{ old('timeline_end') }}">
                            @error('timeline_end')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Simpan Program Kerja</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
