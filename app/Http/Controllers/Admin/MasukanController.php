<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Masukan;
use Illuminate\Http\Request;

class MasukanController extends Controller
{
    public function index()
    {
        $masukans = Masukan::latest()->paginate(10);

        return view('admin.masukan.index', compact('masukans'));
    }

    public function show(Masukan $masukan)
    {
        // Tandai pesan sebagai sudah dibaca jika belum
        if (is_null($masukan->dibaca_pada)) {
            $masukan->update(['dibaca_pada' => now()]);
        }

        return view('admin.masukan.show', compact('masukan'));
    }

    public function destroy(Masukan $masukan)
    {
        $masukan->delete();

        return redirect()->route('admin.masukan.index')->with('success', 'pesan berhasil dihapus');
    }
}
