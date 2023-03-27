<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
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
            // 'validasi' => $request['validasi'],
            'image' => $profileImage,
        ]);
        if($create){
            Toastr::success('Anda Berhasil tambah pengaduan', 'Hore!!!', ["positionClass" => "toast-top-right"]);
            return redirect()->route('routePN.index')->with('succes');
        }
    }
    public function destroy($id_pengaduan){
        $pengaduans = Pengaduan::find($id_pengaduan);
        $pengaduans->delete();

        Toastr::warning('Data berhasil di hapus', 'OK', ["positionClass" => "toast-top-right"]);
        return redirect()->route('routePN.index')->with('success');
    }
    public function show($id_pengaduan){
        $pengaduans = Pengaduan::with('getDataMasyarakat')->where('id', $id_pengaduan)->firstOrFail();
        if($pengaduans->status == 'belum verif'){
            return redirect()->back();
        }
        $tanggapan = Tanggapan::where('id_pengaduan', $id_pengaduan)->first();
        if($tanggapan){
            return view('Pengaduan.show', compact('pengaduans', 'tanggapan'));
        }
        return view('Pengaduan.show', compact('pengaduans'));
    }
    public function verif($id){
        $pengaduans = Pengaduan::where('id', $id)->firstOrFail();
        $pengaduans->update([
            'status' => '0',
        ]);

        Toastr::warning('Data Sudah Di Verifikasi', 'OK', ["positionClass" => "toast-top-right"]);
        return redirect()->route('routePN.index');
    }
}
