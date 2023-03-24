<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
    public function index(){
        $petugas = Petugas::all();
        return view('Petugas.index', compact('petugas'));
    }
    public function create(){
        return view('Petugas.create');
    }
    public function store(Request $request){
        $create = Petugas::create([
            'nama_petugas' => $request['nama_petugas'],
            'username' => $request['username'],
            'password' => Hash::make($request['password']),
            'telp' => $request['telp'],
            'level' => $request['level'],
        ]);
        if($create){
            return redirect()->route('routeP.index')->with('success');
        }
    }
    public function edit($id_petugas){
        $petugas = Petugas::find($id_petugas);
        return view('Petugas.edit', compact('petugas'));
    }
    public function update(Request $request , $id_petugas){
        $petugas = Petugas::find($id_petugas);
        $update = $petugas->update([
            'nama_petugas' => $request['nama_petugas'],
            'username' => $request['username'],
            'password' => Hash::make($request['password']),
            'telp' => $request['telp'],
            'level' => $request['level'],
        ]);
        if($update){
            return redirect()->route('routeP.index')->with('success');
        }
    }
    public function destroy($id_petugas){
        $petugas = Petugas::find($id_petugas);
        $petugas->delete();

        return redirect()->route('routeP.index')->with('success');
    }

}
