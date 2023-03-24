<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Masyarakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $totalAduan = Pengaduan::count();
        $aduanProses = Pengaduan::where('status', 'Proses')->count();
        $aduanSelesai = Pengaduan::where('status', 'Selesai')->count();
        $totalMasyarakat = Masyarakat::count();

        return view('Dashboard', compact('totalAduan', 'aduanProses', 'aduanSelesai', 'totalMasyarakat'));
    }

}
