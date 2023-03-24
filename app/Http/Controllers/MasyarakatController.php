<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function index(){
        $masyarakats = Masyarakat::all();
        return view('Masyarakat.index', compact('masyarakats'));
    }

    public function destroy($id_masyarakat){
        $masyarakats = Masyarakat::find($id_masyarakat);
        $masyarakats->delete();

        return redirect()->route('routeM.index')->with('success');
    }

    public function show(){
        $masyarakats = Masyarakat::all();
        return view('Masyarakat.show', compact('masyarakats'));
    }
}
