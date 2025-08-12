<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bidang;
use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $layanans = Layanan::with('bidang')->latest()->get();
        return view('admin.layanan.index', compact('layanans'));
    }

    public function create()
    {
        $bidangs = Bidang::all();
        return view('admin.layanan.create', compact('bidangs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_layanan' => 'required|string|max:255',
            'bidang_id' => 'required|exists:bidangs,id',
        ]);

        Layanan::create($request->all());
        return redirect()->route('layanan.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Layanan $layanan)
    {
        $bidangs = Bidang::all();
        return view('admin.layanan.edit', compact('layanan', 'bidangs'));
    }

    public function update(Request $request, Layanan $layanan)
    {
        $request->validate([
            'nama_layanan' => 'required|string|max:255',
            'bidang_id' => 'required|exists:bidangs,id',
        ]);

        $layanan->update($request->all());
        return redirect()->route('layanan.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy(Layanan $layanan)
    {
        $layanan->delete();
        return redirect()->route('layanan.index')->with('success', 'Data Layanan berhasil dihapus.');
    }
}
