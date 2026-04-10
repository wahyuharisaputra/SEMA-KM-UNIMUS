@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pengaturan Website</h1>
</div>

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('admin.pengaturan.update') }}" method="POST">
            @csrf
            
            <h5 class="mb-3 text-primary border-bottom pb-2">Informasi Organisasi</h5>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="nama_organisasi" class="form-label">Nama Organisasi</label>
                    <input type="text" class="form-control" id="nama_organisasi" name="nama_organisasi" value="{{ $pengaturan['nama_organisasi'] ?? 'SEMA KM UNIMUS' }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email_kontak" class="form-label">Email Kontak</label>
                    <input type="email" class="form-control" id="email_kontak" name="email_kontak" value="{{ $pengaturan['email_kontak'] ?? 'info@semaunimus.ac.id' }}">
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="telepon" class="form-label">Nomor Telepon / WhatsApp</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" value="{{ $pengaturan['telepon'] ?? '' }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="alamat" class="form-label">Alamat Sekretariat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="2">{{ $pengaturan['alamat'] ?? 'Gedung Muhammadiyah, Universitas Muhammadiyah Semarang' }}</textarea>
                </div>
            </div>

            <h5 class="mb-3 mt-4 text-primary border-bottom pb-2">Sosial Media</h5>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="link_instagram" class="form-label">Link Instagram</label>
                    <input type="url" class="form-control" id="link_instagram" name="link_instagram" value="{{ $pengaturan['link_instagram'] ?? '' }}">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="link_youtube" class="form-label">Link YouTube</label>
                    <input type="url" class="form-control" id="link_youtube" name="link_youtube" value="{{ $pengaturan['link_youtube'] ?? '' }}">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="link_twitter" class="form-label">Link Twitter / X</label>
                    <input type="url" class="form-control" id="link_twitter" name="link_twitter" value="{{ $pengaturan['link_twitter'] ?? '' }}">
                </div>
            </div>

            <h5 class="mb-3 mt-4 text-primary border-bottom pb-2">Profil Singkat</h5>
            <div class="mb-3">
                <label for="deskripsi_singkat" class="form-label">Deskripsi Singkat (Footer)</label>
                <textarea class="form-control" id="deskripsi_singkat" name="deskripsi_singkat" rows="3">{{ $pengaturan['deskripsi_singkat'] ?? 'Senat Mahasiswa Keluarga Mahasiswa Universitas Muhammadiyah Semarang.' }}</textarea>
            </div>
            
            <div class="mb-3">
                <label for="visi_misi" class="form-label">Visi & Misi</label>
                <textarea class="form-control" id="visi_misi" name="visi_misi" rows="6">{{ $pengaturan['visi_misi'] ?? '' }}</textarea>
            </div>

            <div class="d-grid mt-4">
                <button type="submit" class="btn btn-primary btn-lg"><i class="bi bi-save"></i> Simpan Pengaturan</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#visi_misi'), {
            removePlugins: ['CKFinderUploadAdapter', 'CKFinder', 'EasyImage', 'Image', 'ImageCaption', 'ImageStyle', 'ImageToolbar', 'ImageUpload', 'MediaEmbed']
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endsection
