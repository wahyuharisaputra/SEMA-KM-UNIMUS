<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProgramKerja;
use App\Models\Divisi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->nama);

        ProgramKerja::create($data);

        return redirect()->route('admin.program-kerja.index')->with('success', 'Program Kerja berhasil ditambahkan.');
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
        ]);

        $data = $request->all();
        if ($request->nama !== $programKerja->nama) {
            $data['slug'] = Str::slug($request->nama);
        }

        $programKerja->update($data);

        return redirect()->route('admin.program-kerja.index')->with('success', 'Program Kerja berhasil diperbarui.');
    }

    public function destroy(ProgramKerja $programKerja)
    {
        $programKerja->delete();
        return redirect()->route('admin.program-kerja.index')->with('success', 'Program Kerja berhasil dihapus.');
    }
}
