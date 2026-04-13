<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    public function index()
    {
        return view('public.aspirasi');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'nullable|string|max:255',
            'fakultas' => 'required|string|max:255',
            'isi_aspirasi' => 'required|string',
        ]);

        Aspirasi::create([
            'nama' => $validated['nama'] ?? 'Anonim',
            'fakultas' => $validated['fakultas'],
            'isi_aspirasi' => $validated['isi_aspirasi'],
            'status_tindak_lanjut' => 'belum',
        ]);

        return redirect()->back()->with('success', 'Terima kasih! Pengaduan Anda telah kami terima dan akan segera diproses oleh Sekretaris Jenderal SEMA KM.');
    }
}
