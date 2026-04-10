<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function index()
    {
        $divisis = Divisi::latest()->paginate(10);
        return view('admin.divisi.index', compact('divisis'));
    }

    public function create()
    {
        return view('admin.divisi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255|unique:divisis',
            'deskripsi' => 'nullable|string',
        ]);

        Divisi::create($request->all());

        return redirect()->route('admin.divisi.index')->with('success', 'Divisi berhasil ditambahkan.');
    }

    public function edit(Divisi $divisi)
    {
        return view('admin.divisi.edit', compact('divisi'));
    }

    public function update(Request $request, Divisi $divisi)
    {
        $request->validate([
            'nama' => 'required|string|max:255|unique:divisis,nama,' . $divisi->id,
            'deskripsi' => 'nullable|string',
        ]);

        $divisi->update($request->all());

        return redirect()->route('admin.divisi.index')->with('success', 'Divisi berhasil diperbarui.');
    }

    public function destroy(Divisi $divisi)
    {
        $divisi->delete();
        return redirect()->route('admin.divisi.index')->with('success', 'Divisi berhasil dihapus.');
    }
}
