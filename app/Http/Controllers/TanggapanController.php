<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class TanggapanController extends Controller
{
    public function index(){
        $tanggapan = Tanggapan::latest()->with('getDataPetugas', 'getDataPengaduan')->paginate(5);
        return view('Tanggapan.index', compact('tanggapan'));
    }
    public function store(Request $request, $id_pengaduan){
        $request->validate([
            'status' => 'required',
            'tanggapan' => 'required',
        ]);

        $pengaduan = Pengaduan::where('id', $id_pengaduan)->first();
        if($pengaduan){
            $pengaduan->update([
                'status' =>$request->status,
            ]);
            $tanggapan = Tanggapan::where('id_pengaduan', $pengaduan->id)->first();
            if($tanggapan){
                $tanggapan->update([
                    'id_petugas' => Auth::guard('petugas')->user()->id,
                    'tanggapan' => $request->tanggapan
                ]);
            }else{
                Tanggapan::create([
                    'id_pengaduan' => $pengaduan->id,
                    'tgl_tanggapan' => now(),
                    'tanggapan' => $request->tanggapan,
                    'id_petugas' => Auth::guard('petugas')->user()->id,
                ]);
            }
            Toastr::success('Anda Berhasil Menanggapi Keluhan', 'Ok', ["positionClass" => "toast-top-right"]);
            return redirect()->route('routePN.index')->with('success');
        }
        return back()->with('error');
    }

    public function destroy($id_pengaduan){
        $pengaduan = Tanggapan::find($id_pengaduan);
        $pengaduan->delete();

        return redirect()->route('routeT.index')->with('success');
    }

    public function generatePDF()
    {

        if (Auth::guard('petugas')->user()->level == 'Petugas') {
            return back()->with('error', 'Anda tidak memiliki akses.');
        }

        $admin = Auth::guard('petugas')->user()->nama;
        $tanggapans = Tanggapan::latest()->with('getDataPetugas', 'getDataPengaduan')->get();

        $data = [
            'judul' => 'Generate Tanggapan dan Pengaduan',
            'admin' => $admin,
            'tanggapans' => $tanggapans,
        ];

        $pdf = Pdf::loadView('Tanggapan.pdf', $data)->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
}
