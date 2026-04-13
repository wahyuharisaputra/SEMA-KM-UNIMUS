<?php

namespace App\Http\Controllers;

use App\Models\PesanKontak;
use Illuminate\Http\Request;

class PesanKontakController extends Controller
{
    public function index()
    {
        return view('public.kontak');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan' => 'required|string',
        ]);

        PesanKontak::create([
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'subjek' => 'Pesan dari Kontak Website', // Default subject
            'pesan' => $validated['pesan'],
        ]);

        return redirect()->back()->with('success', 'Pesan Anda telah berhasil dikirim. Terima kasih telah menghubungi SEMA KM UNIMUS!');
    }
}
