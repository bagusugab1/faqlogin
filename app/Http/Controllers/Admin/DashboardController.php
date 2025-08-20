<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Bidang;
use App\Models\Faq;
use App\Models\Layanan;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
       $user = Auth::user();
       $stats = [];

       if($user->role == 'super_admin'){
        $stats['totalBidang'] = Bidang::count();
        $stats['totalLayanan'] = Layanan::count();
        $stats['totalFaq'] = Faq::count();
        $stats['totalUser'] = User::count();
       }elseif($user->role == 'admin_bidang'){
        $stats['totalLayanan'] = Layanan::count();
        $stats['totalFaq'] = Faq::count();
       }

       return view('admin.dashboard', compact('stats'));
    }
}
