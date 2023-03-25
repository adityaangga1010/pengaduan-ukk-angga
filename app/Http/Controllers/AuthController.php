<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\Pengaduan;
use App\Models\Masyarakat;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // index register
    public function register(){
        return view('auth.register');
    }
    // store register
    public function storeRegister(Request $request){
        $validator = $request->validate([
            'nik' => 'required|max:16|unique:masyarakats,nik',
            'nama' => 'required',
            'username' => 'required|unique:masyarakats,username',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'password' => 'required',
            'telp' => 'required|unique:masyarakats,telp',
        ]);
        try {
            $validator['password'] = Hash::make($request->password);
            Masyarakat::create($validator);
            Toastr::success('Data Berhasil di tambah', 'OK', ["positionClass" => "toast-top-right"]);
            return redirect()->route('route.login');
        } catch (Throwable $th) {
            Toastr::info('Sepertinya nama pengguna sudah ada', 'Maaf', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
    }

    // index login
    public function login(){
        return view('auth.login');
    }
    // proses login
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Toastr::success('Anda Berhasil Login', 'Selamat', ["positionClass" => "toast-top-right"]);
            return redirect()->route('masyarakat.dashboard');
        }elseif (Auth::guard('petugas')->attempt($credentials)){
            $request->session()->regenerate();
            Toastr::success('Anda Berhasil Login', 'Selamat', ["positionClass" => "toast-top-right"]);
            return redirect()->route('masyarakat.dashboard');
        }
        Toastr::error('Sepertinya Username & Password anda salah', 'Maaf', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function logout(){
        if(Auth::guard('masyarakat')->check()){
            Auth::guard('masyarakat')->logout();
        }elseif(Auth::guard('petugas')->check()){
            Auth::guard('petugas')->logout();
        }
        Toastr::info('Anda Berhasil Keluar ', 'OK', ["positionClass" => "toast-top-right"]);
        return redirect()->route('routeLP.landing');
    }
    // landingpage
    public function landingpage(){
        $PengaduanPending = Pengaduan::where('status', '0')->with('getDataMasyarakat')->get();
        $PengaduanProses = Pengaduan::where('status', 'Proses')->with('getDataMasyarakat', 'getDataTanggapan')->get();
        $PengaduanSelesai = Pengaduan::where('status', 'Selesai')->with('getDataMasyarakat')->get();
        $totalAduan = Pengaduan::count();
        return view('LandingPage', compact('totalAduan', 'PengaduanPending', 'PengaduanProses', 'PengaduanSelesai'));
    }
}
