<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $faq = Faq::with('layanan.bidang')->get();
        return view('template', compact('faq'));
    }
}
