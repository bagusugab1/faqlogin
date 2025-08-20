<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bidang;
use App\Models\Faq;
use App\Models\Layanan;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::with('layanan.bidang')->latest()->get();
        return view('admin.faq.index', compact('faqs'));
    }

    public function create()
    {
        $bidangs = Bidang::all();
        $layanans = Layanan::all();
        return view('admin.faq.create', compact('bidangs', 'layanans'));
    }

    public function store(Request $request)
    {
         $request->validate([
        'bidang_id' => 'required|exists:bidangs,id',
        'layanan_id' => 'required|exists:layanans,id',
        'pertanyaan' => 'required|string',
        'jawaban' => 'required|string',
    ]);

        Faq::create([
        'bidang_id' => $request->bidang_id,
        'layanan_id' => $request->layanan_id,
        'pertanyaan' => $request->pertanyaan,
        'jawaban' => $request->jawaban,
    ]);
        return redirect()->route('faq.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Faq $faq)
    {
        $bidangs = Bidang::all();
        $layanans = Layanan::all();
        return view('admin.faq.edit', compact('faq', 'layanans', 'bidangs'));
    }

    public function update(Request $request, Faq $faq)
    {
        $validatedData = $request->validate([
            'bidang_id' => 'required|exists:bidangs, id',
            'layanan_id' => 'required|exists:layanans,id',
            'pertanyaan' => 'required|string',
            'jawaban' => 'required|string',
        ]);

        $faq->update($validatedData);
        return redirect()->route('faq.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('faq.index')->with('success', 'Data FAQ berhasil dihapus.');
    }
}