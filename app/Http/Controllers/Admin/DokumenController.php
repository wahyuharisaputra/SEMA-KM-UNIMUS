<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DokumenController extends Controller
{
    public function index()
    {
        $dokumens = Dokumen::latest()->paginate(10);
        return view('admin.dokumen.index', compact('dokumens'));
    }

    public function create()
    {
        return view('admin.dokumen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'file_dokumen' => 'required|file|mimes:pdf,doc,docx,xls,xlsx|max:10240',
        ]);

        $data = $request->all();

        if ($request->hasFile('file_dokumen')) {
            $file = $request->file('file_dokumen');
            $data['file_dokumen'] = $file->store('dokumen', 'public');
            $data['tipe'] = $file->getClientOriginalExtension();
            $data['ukuran'] = $file->getSize();
        }

        Dokumen::create($data);

        return redirect()->route('admin.dokumen.index')->with('success', 'Dokumen berhasil diunggah.');
    }

    public function edit(Dokumen $dokuman)
    {
        return view('admin.dokumen.edit', compact('dokuman'));
    }

    public function update(Request $request, Dokumen $dokuman)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'file_dokumen' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx|max:10240',
        ]);

        $data = $request->all();

        if ($request->hasFile('file_dokumen')) {
            if ($dokuman->file_dokumen && Storage::disk('public')->exists($dokuman->file_dokumen)) {
                Storage::disk('public')->delete($dokuman->file_dokumen);
            }
            $file = $request->file('file_dokumen');
            $data['file_dokumen'] = $file->store('dokumen', 'public');
            $data['tipe'] = $file->getClientOriginalExtension();
            $data['ukuran'] = $file->getSize();
        }

        $dokuman->update($data);

        return redirect()->route('admin.dokumen.index')->with('success', 'Dokumen berhasil diperbarui.');
    }

    public function destroy(Dokumen $dokuman)
    {
        if ($dokuman->file_dokumen && Storage::disk('public')->exists($dokuman->file_dokumen)) {
            Storage::disk('public')->delete($dokuman->file_dokumen);
        }
        $dokuman->delete();
        
        return redirect()->route('admin.dokumen.index')->with('success', 'Dokumen berhasil dihapus.');
    }
}
