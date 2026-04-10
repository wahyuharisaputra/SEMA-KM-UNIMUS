@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">Manajemen Galeri (Foto)</h1>
    <a href="{{ route('admin.galeri.create') }}" class="btn btn-primary">
        <i class="bi bi-file-image"></i> Tambah Foto Baru
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
                        <th width="20%">Foto</th>
                        <th>Judul Foto</th>
                        <th>Album</th>
                        <th width="15%" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($galeris as $index => $item)
                    <tr>
                        <td>{{ $galeris->firstItem() + $index }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $item->file_foto) }}" alt="{{ $item->judul }}" class="img-thumbnail" style="max-height: 100px;">
                        </td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->album->nama ?? '-' }}</td>
                        <td class="text-center">
                            <a href="{{ route('admin.galeri.edit', $item->id) }}" class="btn btn-sm btn-warning mb-1">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('admin.galeri.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin menghapus foto ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger mb-1">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">Belum ada data foto galeri.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-end mt-3">
            {{ $galeris->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
@endsection
