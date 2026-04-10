<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengaturan;
use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    public function index()
    {
        $pengaturan = Pengaturan::all()->pluck('value', 'key')->toArray();
        return view('admin.pengaturan.index', compact('pengaturan'));
    }

    public function updateAll(Request $request)
    {
        $data = $request->except(['_token', '_method']);
        
        foreach ($data as $key => $value) {
            Pengaturan::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        return redirect()->route('admin.pengaturan.index')->with('success', 'Pengaturan berhasil diperbarui.');
    }
}
