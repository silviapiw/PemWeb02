<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    
    public function sukses(Request $request)
    {
        $nama = $request->input('nama');
        $tanggal_pemeriksaan = $request->input('tanggal_pemeriksaan');
        $tanggal_lahir = $request->input('tanggal_lahir');
        $jenis_kelamin = $request->input('jenis_kelamin');
        return view('pasien/sukses',
            ['nama'=>$nama, 'tanggal_pemeriksaan'=>$tanggal_pemeriksaan, 'tanggal_lahir'=>$tanggal_lahir, 'jenis_kelamin'=>$jenis_kelamin]);
    }
}
