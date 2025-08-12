<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bidang;
use App\Models\Faq;
use App\Models\Layanan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBidang = Bidang::count();
        $totalLayanan = Layanan::count();
        $totalFaq = Faq::count();

        return view('admin.dashboard', compact('totalBidang', 'totalLayanan', 'totalFaq'));
    }
}
