<?php

namespace App\Http\Controllers;

use App\Models\BukuTamu;
use Illuminate\Http\Request;

class BukuTamuController extends Controller
{

    public function get()
    {
        return BukuTamu::all();
    }

    public function add(Request $request)
    {
 
        if($request->file('foto')) {
            $foto =  $request->file('foto')->getClientOriginalExtension();
            $d = time().'.'.$foto;
            $destinationPath ="foto";
            $request->file('foto')->move($destinationPath, $d);
        } else {
            $d = '';
        }

         
        if($request->file('ttd')) {
            $ttd =  $request->file('ttd')->getClientOriginalExtension();
            $formTtd = time().'.'.$ttd;
            $destinationPathTTd ="ttd";
            $request->file('ttd')->move($destinationPathTTd, $formTtd);
        } else {
            $formTtd = '';
        }

        return BukuTamu::create([
            'id_anggota' => $request->input('id_anggota'),
            'nama' => $request->input('nama'),
            'jurusan' => $request->input('jurusan'),
            'ukuran_kaos' => $request->input('ukuran_kaos'),
            'foto' => $d,
            'ttd' => $formTtd
        ]);        
    }
}