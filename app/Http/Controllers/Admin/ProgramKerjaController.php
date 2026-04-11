<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProgramKerja;
use App\Models\Divisi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProgramKerjaController extends Controller
{
    public function index()
    {
        $programKerjas = ProgramKerja::with('divisi')->latest()->paginate(10);
        return view('admin.program-kerja.index', compact('programKerjas'));
    }

    public function create()
    {
        $divisis = Divisi::all();
        return view('admin.program-kerja.create', compact('divisis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tujuan' => 'nullable|string',
            'timeline_start' => 'nullable|date',
            'timeline_end' => 'nullable|date|after_or_equal:timeline_start',
            'status_pelaksanaan' => 'required|in:perencanaan,berjalan,selesai',
            'divisi_id' => 'required|exists:divisis,id',
            'periode' => 'required|string|max:50',
            'fotos.*' => 'nullable|file|mimes:jpeg,png,jpg,webp|max:10240',
        ]);

        $data = $request->except('fotos');
        $slug = Str::slug($request->nama);
        
        // Cek jika slug sudah ada, tambahkan suffix unik
        $count = ProgramKerja::where('slug', 'like', $slug . '%')->count();
        $data['slug'] = $count ? $slug . '-' . ($count + 1) : $slug;

        if ($request->hasFile('fotos')) {
            $fotos = [];
            foreach ($request->file('fotos') as $file) {
                $fotos[] = $file->store('agendas', 'public');
            }
            $data['fotos'] = $fotos;
        }

        ProgramKerja::create($data);

        return redirect()->route('admin.program-kerja.index')->with('success', 'Agenda berhasil ditambahkan.');
    }

    public function edit(ProgramKerja $programKerja)
    {
        $divisis = Divisi::all();
        return view('admin.program-kerja.edit', compact('programKerja', 'divisis'));
    }

    public function update(Request $request, ProgramKerja $programKerja)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tujuan' => 'nullable|string',
            'timeline_start' => 'nullable|date',
            'timeline_end' => 'nullable|date|after_or_equal:timeline_start',
            'status_pelaksanaan' => 'required|in:perencanaan,berjalan,selesai',
            'divisi_id' => 'required|exists:divisis,id',
            'periode' => 'required|string|max:50',
            'fotos.*' => 'nullable|file|mimes:jpeg,png,jpg,webp|max:10240',
        ]);

        $data = $request->except('fotos');
        if ($request->nama !== $programKerja->nama) {
            $slug = Str::slug($request->nama);
            $count = ProgramKerja::where('slug', 'like', $slug . '%')->where('id', '!=', $programKerja->id)->count();
            $data['slug'] = $count ? $slug . '-' . ($count + 1) : $slug;
        }

        if ($request->hasFile('fotos')) {
            $existingFotos = $programKerja->fotos ?? [];
            foreach ($request->file('fotos') as $file) {
                $existingFotos[] = $file->store('agendas', 'public');
            }
            $data['fotos'] = $existingFotos;
        }

        $programKerja->update($data);

        return redirect()->route('admin.program-kerja.index')->with('success', 'Agenda berhasil diperbarui.');
    }

    public function destroy(ProgramKerja $programKerja)
    {
        if ($programKerja->fotos && is_iterable($programKerja->fotos)) {
            foreach ($programKerja->fotos as $foto) {
                if (Storage::disk('public')->exists($foto)) {
                    Storage::disk('public')->delete($foto);
                }
            }
        }
        $programKerja->delete();
        return redirect()->route('admin.program-kerja.index')->with('success', 'Agenda berhasil dihapus.');
    }

    public function deletePhoto(Request $request, ProgramKerja $programKerja)
    {
        $photoPath = $request->photo_path;
        $fotos = $programKerja->fotos;

        if (($key = array_search($photoPath, $fotos)) !== false) {
            unset($fotos[$key]);
            
            if (Storage::disk('public')->exists($photoPath)) {
                Storage::disk('public')->delete($photoPath);
            }

            $programKerja->update(['fotos' => array_values($fotos)]);
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false, 'message' => 'Foto tidak ditemukan.'], 404);
    }
}
