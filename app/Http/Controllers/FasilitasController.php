<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    // Tambah fasilitas
    public function store(Request $request, $id)
    {
        $request->validate([
            'nama_fasilitas' => 'required|string|max:255'
        ]);

        Fasilitas::create([
            'tipe_kamar_id'   => $id,
            'nama_fasilitas'  => $request->nama_fasilitas
        ]);

        return redirect()->back()->with('success', 'Fasilitas berhasil ditambahkan.');
    }

    // Edit fasilitas
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_fasilitas' => 'required|string|max:255'
        ]);

        $fasilitas = Fasilitas::findOrFail($id);

        $fasilitas->update([
            'nama_fasilitas' => $request->nama_fasilitas
        ]);

        return redirect()->back()->with('success', 'Fasilitas berhasil diperbarui.');
    }

    // Hapus fasilitas
    public function destroy($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        $fasilitas->delete();

        return redirect()->back()->with('success', 'Fasilitas berhasil dihapus.');
    }
}