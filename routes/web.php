<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', function () {
    return view('public.home');
})->name('home');

Route::get('/tentang-kami', function () {
    return view('public.tentang-kami');
})->name('tentang-kami');

Route::get('/program-kerja', function () {
    $agendasByPeriode = App\Models\ProgramKerja::with('divisi')
        ->orderBy('periode', 'desc')
        ->get()
        ->groupBy('periode');
    return view('public.program-kerja', compact('agendasByPeriode'));
})->name('program-kerja');

Route::get('/berita', function () {
    return view('public.berita');
})->name('berita');

Route::get('/galeri', function () {
    return view('public.galeri');
})->name('galeri');

Route::get('/dokumen', function () {
    return view('public.dokumen');
})->name('dokumen');

Route::get('/aspirasi', [App\Http\Controllers\AspirasiController::class, 'index'])->name('aspirasi');
Route::post('/aspirasi', [App\Http\Controllers\AspirasiController::class, 'store'])->name('aspirasi.store');

Route::get('/kontak', [App\Http\Controllers\PesanKontakController::class, 'index'])->name('kontak');
Route::post('/kontak', [App\Http\Controllers\PesanKontakController::class, 'store'])->name('kontak.store');

// Admin Routes protected by Auth
Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::name('admin.')->group(function () {
        Route::resource('kategori-berita', \App\Http\Controllers\Admin\KategoriBeritaController::class)->parameters(['kategori-berita' => 'kategori']);
        Route::resource('berita', \App\Http\Controllers\Admin\BeritaController::class)->parameters(['berita' => 'berita']);
        Route::resource('divisi', \App\Http\Controllers\Admin\DivisiController::class)->parameters(['divisi' => 'divisi']);
        Route::resource('program-kerja', \App\Http\Controllers\Admin\ProgramKerjaController::class)->parameters(['program-kerja' => 'programKerja']);
        Route::post('program-kerja/{programKerja}/delete-photo', [\App\Http\Controllers\Admin\ProgramKerjaController::class, 'deletePhoto'])->name('program-kerja.delete-photo');
        Route::resource('album-galeri', \App\Http\Controllers\Admin\AlbumGaleriController::class)->parameters(['album-galeri' => 'albumGaleri']);
        Route::resource('galeri', \App\Http\Controllers\Admin\GaleriController::class)->parameters(['galeri' => 'galeri']);
        Route::resource('dokumen', \App\Http\Controllers\Admin\DokumenController::class)->parameters(['dokumen' => 'dokuman']);
        
        // Phase 4 Routes
        Route::resource('aspirasi', \App\Http\Controllers\Admin\AspirasiController::class)->only(['index', 'update', 'destroy']);
        Route::resource('pesan', \App\Http\Controllers\Admin\PesanKontakController::class)->only(['index', 'show', 'destroy']);
        
        Route::get('pengaturan', [\App\Http\Controllers\Admin\PengaturanController::class, 'index'])->name('pengaturan.index');
        Route::post('pengaturan', [\App\Http\Controllers\Admin\PengaturanController::class, 'updateAll'])->name('pengaturan.update');
    });
});

// Auth Routes from Breeze
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
