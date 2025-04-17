<?php

namespace App\Http\Controllers;

use App\Models\hasil;
use App\Models\pelaksana;
use App\Models\penugas;
use App\Models\tugas;
use Illuminate\Http\Request;

class ceoController extends Controller
{
    public function index() {
        $tugas = tugas::all();
        return view('ceo.ceo', ['tugas'=>$tugas]);
    }
    
    public function create() {
        $penugas = penugas::all();
        $pelaksana = pelaksana::all();
        return view('ceo.create', ['penugas'=>$penugas, 'pelaksana'=>$pelaksana]);
    }

    public function store(Request $request) {
        $request->validate([
         'judul' => 'required',
         'deskripsi' => 'required',
         'penugas' => 'required|numeric',
         'pelaksana' => 'required|numeric',
     ]);

     $tugas = new tugas();
     $tugas->id_penugas = $request->input('penugas');
     $tugas->id_pelaksana = $request->input('pelaksana');
     $tugas->judul = $request->input('judul');
     $tugas->deskripsi = $request->input('deskripsi');
     $tugas->save();

     $hasil = new hasil();
     $hasil->id_tugas = $tugas->id;
     $hasil->status = 1;
     $hasil->save();

     return redirect()->action([ceoController::class, 'index']);
 }

 public function update(Request $id) {
    $id->validate(
        [
            'judul' => 'required',
            'deskripsi' => 'required',
            'penugas' => 'required|numeric',
            'pelaksana' => 'required|numeric',
            'status' => 'required'
            ]);
    $tugas = tugas::find($id->input('id'));
    $tugas->judul = $id->input('judul');
    $tugas->deskripsi = $id->input('deskripsi');
    $tugas->id_penugas = $id->input('penugas');
    $tugas->id_pelaksana = $id->input('pelaksana');
    $tugas->save();

    hasil::where('id_tugas', $tugas->id)->update([
        'status'=>$id->status
    ]);
    return redirect()->action([ceoController::class, 'index']);
    }

    public function destroy(Request $id) {
        $tugas = tugas::findOrFail($id->input('id'));
        $tugas->delete();
        return redirect()->action([ceoController::class, 'index']);
    }

}
