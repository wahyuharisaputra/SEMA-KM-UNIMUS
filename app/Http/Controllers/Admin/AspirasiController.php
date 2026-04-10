<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aspirasi;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    public function index()
    {
        $aspirasis = Aspirasi::latest()->paginate(15);
        return view('admin.aspirasi.index', compact('aspirasis'));
    }

    public function update(Request $request, Aspirasi $aspirasi)
    {
        $request->validate(['status_tindak_lanjut' => 'required|in:belum,ditindaklanjuti']);
        $aspirasi->update(['status_tindak_lanjut' => $request->status_tindak_lanjut]);
        return redirect()->route('admin.aspirasi.index')->with('success', 'Status aspirasi diperbarui.');
    }

    public function destroy(Aspirasi $aspirasi)
    {
        $aspirasi->delete();
        return redirect()->route('admin.aspirasi.index')->with('success', 'Aspirasi dihapus.');
    }
}
