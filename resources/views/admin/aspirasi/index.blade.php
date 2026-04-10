@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">Manajemen Aspirasi Mahasiswa</h1>
</div>

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                <thead class="table-light">
                    <tr>
                        <th width="5%">No</th>
                        <th width="15%">Pengirim</th>
                        <th width="45%">Isi Aspirasi</th>
                        <th>Status</th>
                        <th width="15%" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($aspirasis as $index => $item)
                    <tr>
                        <td>{{ $aspirasis->firstItem() + $index }}</td>
                        <td>
                            <strong>{{ $item->nama ?? 'Anonim' }}</strong><br>
                            <small class="text-muted">{{ $item->fakultas ?? '-' }}</small>
                        </td>
                        <td>{{ $item->isi_aspirasi }}</td>
                        <td>
                            @if($item->status_tindak_lanjut == 'ditindaklanjuti')
                                <span class="badge bg-success">Ditindaklanjuti</span>
                            @else
                                <span class="badge bg-danger">Belum</span>
                            @endif
                        </td>
                        <td class="text-center">
                            @if($item->status_tindak_lanjut == 'belum')
                            <form action="{{ route('admin.aspirasi.update', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Tandai aspirasi ini telah ditindaklanjuti?');">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status_tindak_lanjut" value="ditindaklanjuti">
                                <button type="submit" class="btn btn-sm btn-success mb-1" title="Tandai Selesai">
                                    <i class="bi bi-check-lg"></i>
                                </button>
                            </form>
                            @endif
                            
                            <form action="{{ route('admin.aspirasi.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus aspirasi ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger mb-1" title="Hapus">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">Belum ada data aspirasi yang masuk.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-end mt-3">
            {{ $aspirasis->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
@endsection
