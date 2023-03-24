<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\Pengaduan;
use App\Models\Masyarakat;
use Illuminate\Http\Request;
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
            'password' => 'required',
            'telp' => 'required|unique:masyarakats,telp',
        ]);
        try {
            $validator['password'] = Hash::make($request->password);
            Masyarakat::create($validator);
            return redirect()->route('route.login')->with('success', 'Registrasi Berhasil');
        } catch (Throwable $th) {
            return back()->with('error', 'Sepertinya ada yang salah');
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
            return redirect()->route('masyarakat.dashboard');
        }elseif (Auth::guard('petugas')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('masyarakat.dashboard');
        }

        return back()->withErrors([
            'username' => 'Autentikasi gagal.',
        ])->onlyInput('username');
    }

    public function logout(){
        if(Auth::guard('masyarakat')->check()){
            Auth::guard('masyarakat')->logout();
        }elseif(Auth::guard('petugas')->check()){
            Auth::guard('petugas')->logout();
        }
        return redirect()->route('routeLP.landing');
    }
    // landingpage
    public function landingpage(){
        $totalAduan = Pengaduan::count();
        return view('LandingPage', compact('totalAduan'));
    }
}
