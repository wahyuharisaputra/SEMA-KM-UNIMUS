@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">Manajemen Agenda</h1>
    <a href="{{ route('admin.program-kerja.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-lg"></i> Tambah Agenda
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
                        <th>Nama Program</th>
                        <th>Divisi</th>
                        <th>Timeline</th>
                        <th>Status</th>
                        <th width="15%" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($programKerjas as $index => $item)
                    <tr>
                        <td>{{ $programKerjas->firstItem() + $index }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->divisi->nama ?? '-' }}</td>
                        <td>
                            @if($item->timeline_start && $item->timeline_end)
                                {{ $item->timeline_start->format('d M Y') }} - {{ $item->timeline_end->format('d M Y') }}
                            @else
                                <span class="text-muted">Belum ditentukan</span>
                            @endif
                        </td>
                        <td>
                            @if($item->status_pelaksanaan == 'selesai')
                                <span class="badge bg-success">Selesai</span>
                            @elseif($item->status_pelaksanaan == 'berjalan')
                                <span class="badge bg-primary">Berjalan</span>
                            @else
                                <span class="badge bg-secondary">Perencanaan</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <a href="{{ route('admin.program-kerja.edit', $item->id) }}" class="btn btn-sm btn-warning mb-1">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('admin.program-kerja.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus agenda ini?');">
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
                        <td colspan="6" class="text-center">Belum ada data agenda.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-end mt-3">
            {{ $programKerjas->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
@endsection
