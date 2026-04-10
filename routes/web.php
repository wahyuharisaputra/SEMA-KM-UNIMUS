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
    return view('public.program-kerja');
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

Route::get('/aspirasi', function () {
    return view('public.aspirasi');
})->name('aspirasi');

Route::get('/kontak', function () {
    return view('public.kontak');
})->name('kontak');

// Admin Routes protected by Auth
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Nanti akan ditambahkan rute CRUD di sini
    // Route::resource('berita', Admin\BeritaController::class);
    // Route::resource('program-kerja', Admin\ProgramKerjaController::class);
});

// Auth Routes from Breeze
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
