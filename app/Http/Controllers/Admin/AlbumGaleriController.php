<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AlbumGaleri;
use Illuminate\Http\Request;

class AlbumGaleriController extends Controller
{
    public function index()
    {
        $albums = AlbumGaleri::withCount('galeris')->latest()->paginate(10);
        return view('admin.album-galeri.index', compact('albums'));
    }

    public function create()
    {
        return view('admin.album-galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        AlbumGaleri::create($request->all());

        return redirect()->route('admin.album-galeri.index')->with('success', 'Album berhasil ditambahkan.');
    }

    public function edit(AlbumGaleri $albumGaleri)
    {
        return view('admin.album-galeri.edit', compact('albumGaleri'));
    }

    public function update(Request $request, AlbumGaleri $albumGaleri)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $albumGaleri->update($request->all());

        return redirect()->route('admin.album-galeri.index')->with('success', 'Album berhasil diperbarui.');
    }

    public function destroy(AlbumGaleri $albumGaleri)
    {
        $albumGaleri->delete();
        return redirect()->route('admin.album-galeri.index')->with('success', 'Album berhasil dihapus.');
    }
}
