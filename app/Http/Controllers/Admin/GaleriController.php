<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use App\Models\AlbumGaleri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::with('album')->latest()->paginate(10);
        return view('admin.galeri.index', compact('galeris'));
    }

    public function create()
    {
        $albums = AlbumGaleri::all();
        return view('admin.galeri.create', compact('albums'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'album_id' => 'required|exists:album_galeris,id',
            'file_foto' => 'required|image|mimes:jpeg,png,jpg|max:5120',
        ]);

        $data = $request->all();

        if ($request->hasFile('file_foto')) {
            $data['file_foto'] = $request->file('file_foto')->store('galeri', 'public');
        }

        Galeri::create($data);

        return redirect()->route('admin.galeri.index')->with('success', 'Foto berhasil ditambahkan ke galeri.');
    }

    public function edit(Galeri $galeri)
    {
        $albums = AlbumGaleri::all();
        return view('admin.galeri.edit', compact('galeri', 'albums'));
    }

    public function update(Request $request, Galeri $galeri)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'album_id' => 'required|exists:album_galeris,id',
            'file_foto' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
        ]);

        $data = $request->all();

        if ($request->hasFile('file_foto')) {
            if ($galeri->file_foto && Storage::disk('public')->exists($galeri->file_foto)) {
                Storage::disk('public')->delete($galeri->file_foto);
            }
            $data['file_foto'] = $request->file('file_foto')->store('galeri', 'public');
        }

        $galeri->update($data);

        return redirect()->route('admin.galeri.index')->with('success', 'Foto galeri berhasil diperbarui.');
    }

    public function destroy(Galeri $galeri)
    {
        if ($galeri->file_foto && Storage::disk('public')->exists($galeri->file_foto)) {
            Storage::disk('public')->delete($galeri->file_foto);
        }
        $galeri->delete();
        
        return redirect()->route('admin.galeri.index')->with('success', 'Foto berhasil dihapus.');
    }
}
