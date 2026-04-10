<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PesanKontak;

class PesanKontakController extends Controller
{
    public function index()
    {
        $pesans = PesanKontak::latest()->paginate(15);
        return view('admin.pesan.index', compact('pesans'));
    }

    public function show(PesanKontak $pesan)
    {
        return view('admin.pesan.show', compact('pesan'));
    }

    public function destroy(PesanKontak $pesan)
    {
        $pesan->delete();
        return redirect()->route('admin.pesan.index')->with('success', 'Pesan dihapus.');
    }
}
