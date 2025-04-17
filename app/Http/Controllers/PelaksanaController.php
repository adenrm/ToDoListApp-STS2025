<?php

namespace App\Http\Controllers;

use App\Models\hasil;
use App\Models\pelaksana;
use App\Models\penugas;
use App\Models\tugas;
use Illuminate\Http\Request;

class PelaksanaController extends Controller
{
    
    public function index() {
        $tugas = tugas::all();
        return view('pelaksana.pelaksana', ['tugas'=>$tugas]);
    }

    public function edit(Request $id) {
        $tugas = tugas::find($id->input('id'));
        $penugas = penugas::all();
        $pelaksana = pelaksana::all();
        return view('pelaksana.edit', ['tugas'=>$tugas, 'penugas'=>$penugas, 'pelaksana'=>$pelaksana]);
    } 

    public function update(Request $id) {
        $id->validate(
            [
                'status' => 'required'
                ]);
        $tugas = tugas::find($id->input('id'));

        hasil::where('id_tugas', $tugas->id)->update([
            'status'=>$id->status
        ]);
        return redirect()->action([PelaksanaController::class, 'index']);
    }
}
