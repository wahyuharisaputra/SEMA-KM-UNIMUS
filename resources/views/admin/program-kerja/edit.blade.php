@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Agenda</h1>
    <a href="{{ route('admin.program-kerja.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('admin.program-kerja.update', $programKerja->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="row">
                <div class="col-md-8">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Agenda <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $programKerja->nama) }}" required>
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" rows="3">{{ old('deskripsi', $programKerja->deskripsi) }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="tujuan" class="form-label">Tujuan</label>
                        <textarea class="form-control @error('tujuan') is-invalid @enderror" id="tujuan" name="tujuan" rows="3">{{ old('tujuan', $programKerja->tujuan) }}</textarea>
                        @error('tujuan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    @if($programKerja->fotos && count($programKerja->fotos) > 0)
                    <div class="mb-3">
                        <label class="form-label fw-bold">Foto Dokumentasi Saat Ini:</label>
                        <div class="row g-2">
                            @foreach($programKerja->fotos as $foto)
                            <div class="col-md-3 position-relative photo-item" id="photo-{{ md5($foto) }}">
                                <div class="card h-100 shadow-sm">
                                    <img src="{{ asset('storage/' . $foto) }}" class="card-img-top object-fit-cover" style="height: 120px;" alt="Foto Agenda">
                                    <div class="card-footer p-1 text-center bg-white">
                                        <button type="button" class="btn btn-sm btn-danger w-100 delete-photo-btn" data-path="{{ $foto }}">
                                            <i class="bi bi-trash"></i> Hapus
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
                
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="periode" class="form-label">Periode <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('periode') is-invalid @enderror" id="periode" name="periode" value="{{ old('periode', $programKerja->periode) }}" placeholder="Contoh: 2025-2026" required>
                        @error('periode')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="divisi_id" class="form-label">Divisi Penanggung Jawab <span class="text-danger">*</span></label>
                        <select class="form-select @error('divisi_id') is-invalid @enderror" id="divisi_id" name="divisi_id" required>
                            <option value="">-- Pilih Divisi --</option>
                            @foreach($divisis as $divisi)
                                <option value="{{ $divisi->id }}" {{ old('divisi_id', $programKerja->divisi_id) == $divisi->id ? 'selected' : '' }}>
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
                            <option value="perencanaan" {{ old('status_pelaksanaan', $programKerja->status_pelaksanaan) == 'perencanaan' ? 'selected' : '' }}>Perencanaan</option>
                            <option value="berjalan" {{ old('status_pelaksanaan', $programKerja->status_pelaksanaan) == 'berjalan' ? 'selected' : '' }}>Berjalan</option>
                            <option value="selesai" {{ old('status_pelaksanaan', $programKerja->status_pelaksanaan) == 'selesai' ? 'selected' : '' }}>Selesai</option>
                        </select>
                        @error('status_pelaksanaan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="timeline_start" class="form-label">Mulai (Opsional)</label>
                            <input type="date" class="form-control @error('timeline_start') is-invalid @enderror" id="timeline_start" name="timeline_start" 
                                value="{{ old('timeline_start', $programKerja->timeline_start ? $programKerja->timeline_start->format('Y-m-d') : '') }}">
                            @error('timeline_start')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="timeline_end" class="form-label">Selesai (Opsional)</label>
                            <input type="date" class="form-control @error('timeline_end') is-invalid @enderror" id="timeline_end" name="timeline_end" 
                                value="{{ old('timeline_end', $programKerja->timeline_end ? $programKerja->timeline_end->format('Y-m-d') : '') }}">
                            @error('timeline_end')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="fotos" class="form-label">Tambah Foto Baru (Bisa lebih dari 1)</label>
                        <input type="file" class="form-control @error('fotos') is-invalid @enderror @error('fotos.*') is-invalid @enderror" id="fotos" name="fotos[]" multiple accept="image/*">
                        <div class="form-text">Bisa pilih banyak foto sekaligus. Format: JPG, PNG, JPEG (Maks 2MB/foto)</div>
                        @error('fotos')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Perbarui Agenda</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
document.querySelectorAll('.delete-photo-btn').forEach(button => {
    button.addEventListener('click', function() {
        if (confirm('Yakin ingin menghapus foto ini secara permanen?')) {
            const path = this.getAttribute('data-path');
            const cardItem = this.closest('.photo-item');
            
            fetch("{{ route('admin.program-kerja.delete-photo', $programKerja->id) }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ photo_path: path })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    cardItem.remove();
                } else {
                    alert('Gagal menghapus foto: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat mencoba menghapus foto.');
            });
        }
    });
});
</script>
@endpush
@endsection
