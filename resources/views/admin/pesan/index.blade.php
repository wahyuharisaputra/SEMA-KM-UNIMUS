@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kotak Masuk Pesan Publik</h1>
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
                        <th width="20%">Pengirim</th>
                        <th width="25%">Subjek</th>
                        <th>Cuplikan Pesan</th>
                        <th width="15%" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pesans as $index => $item)
                    <tr>
                        <td>{{ $pesans->firstItem() + $index }}</td>
                        <td>
                            <strong>{{ $item->nama }}</strong><br>
                            <a href="mailto:{{ $item->email }}"><small>{{ $item->email }}</small></a>
                        </td>
                        <td>{{ $item->subjek ?? '-' }}</td>
                        <td>{{ Str::limit($item->pesan, 60) }}</td>
                        <td class="text-center">
                            <form action="{{ route('admin.pesan.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus pesan ini?');">
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
                        <td colspan="5" class="text-center">Kotak masuk masih kosong.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-end mt-3">
            {{ $pesans->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
@endsection
