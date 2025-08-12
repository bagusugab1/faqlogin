<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bidang;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    public function index()
    {
        $bidangs = Bidang::latest()->get();
        return view('admin.bidang.index', compact('bidangs'));
    }

    public function create()
    {
        return view('admin.bidang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_bidang' => 'required|string|max:255']);
            Bidang::create($request->all());
            return redirect()->route('bidang.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit(Bidang $bidang)
    {
        return view('admin.bidang.edit', compact('bidang'));
    }

    public function update(Request $request, Bidang $bidang)
    {
        $request->validate(['nama_bidang' => 'required|string|max:255']);
        $bidang->update($request->all());
        return redirect()->route('bidang.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy(Bidang $bidang)
    {
        $bidang->delete();
        return redirect()->route('bidang.index')->with('success', 'Data berhasil dihapus');
    }
}
