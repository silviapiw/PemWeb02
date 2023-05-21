<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view ('user/index', ['kategoriuser'=>'Mahasiswa']);
    }

    public function daftar()
    {
        $ar_kategori = ["Dosen", "Mahasiswa", "Staff", "Alumni"];
        return view ('user/daftar', ['kategori' => $ar_kategori]);
    }

    public function store(Request $request)
    {
        $nama = $request->input('nama');
        $email = $request->input('email');
        $kategori = $request->input('kategori');
        $alamat = $request->input('alamat');
        return view('user/store',
            ['nama'=>$nama, 'email'=>$email, 'kategori'=>$kategori, 'alamat'=>$alamat]);
    }
}
