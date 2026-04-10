@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">Manajemen Dokumen</h1>
    <a href="{{ route('admin.dokumen.create') }}" class="btn btn-primary">
        <i class="bi bi-file-earmark-plus"></i> Upload Dokumen
    </a>
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
                        <th>Judul Dokumen</th>
                        <th width="15%">Tipe File</th>
                        <th width="15%">Ukuran</th>
                        <th width="15%" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($dokumens as $index => $item)
                    <tr>
                        <td>{{ $dokumens->firstItem() + $index }}</td>
                        <td>{{ $item->judul }}</td>
                        <td><span class="badge bg-secondary text-uppercase">{{ $item->tipe ?? 'UNKNOWN' }}</span></td>
                        <td>{{ $item->ukuran ? number_format($item->ukuran / 1024, 2) . ' KB' : '-' }}</td>
                        <td class="text-center">
                            <a href="{{ asset('storage/' . $item->file_dokumen) }}" class="btn btn-sm btn-info mb-1" target="_blank" title="Lihat">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="{{ route('admin.dokumen.edit', $item->id) }}" class="btn btn-sm btn-warning mb-1" title="Edit">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('admin.dokumen.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus dokumen ini?');">
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
                        <td colspan="5" class="text-center">Belum ada data dokumen.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-end mt-3">
            {{ $dokumens->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
@endsection
