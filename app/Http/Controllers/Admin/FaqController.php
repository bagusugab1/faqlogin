<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Layanan;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::with('layanan')->latest()->get();
        return view('admin.faq.index', compact('faqs'));
    }

    public function create()
    {
        $layanans = Layanan::all();
        return view('admin.faq.create', compact('layanans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string',
            'jawaban' => 'required|string',
            'layanan_id' => 'required|exists:layanans,id',
            'bidang_id' => 'required|exists:bidangs,id',
        ]);

        Faq::create($request->all());
        return redirect()->route('faq.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Faq $faq)
    {
        $layanans = Layanan::all();
        return view('admin.faq.edit', compact('faq', 'layanans'));
    }

    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
            'layanan_id' => 'required|exists:layanans,id',
            'bidang_id' => 'required|exists:bidangs,id',
        ]);

        $faq->update($request->all());

        return redirect()->route('faq.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('faq.index')->with('success', 'Data FAQ berhasil dihapus.');
    }
}
