<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengaduanController extends Controller
{
    public function index(){
        $pengaduans = Pengaduan::all();
        return view('Pengaduan.index', compact('pengaduans'));
    }
    public function create(){
        return view('Pengaduan.create');
    }
    public function store(Request $request){
        if ($image = $request->file('image')) {
            $destinationPath = 'img/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $profileImage;
        }
        $create = Pengaduan::create([
            'tgl_pengaduan' => Carbon::now(),
            'nik' => Auth::guard('masyarakat')->user()->nik,
            'isi_laporan' => $request['isi_laporan'],
            'kategori' => $request['kategori'],
            'image' => $profileImage,
        ]);
        if($create){
            return redirect()->route('routePN.index')->with('succes');
        }
    }
    public function destroy($id_pengaduan){
        $pengaduans = Pengaduan::find($id_pengaduan);
        $pengaduans->delete();

        return redirect()->route('routePN.index')->with('success');
    }
    public function show($id_pengaduan){
        $pengaduans = Pengaduan::with('getDataMasyarakat')->where('id', $id_pengaduan)->firstOrFail();
        $tanggapan = Tanggapan::where('id_pengaduan', $id_pengaduan)->first();
        if($tanggapan){
            return view('Pengaduan.show', compact('pengaduans', 'tanggapan'));
        }
        return view('Pengaduan.show', compact('pengaduans'));
    }
}
