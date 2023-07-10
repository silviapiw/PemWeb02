<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class TokoController extends Controller
{
    public function index()
    {
        return view('toko/index');
    }

    public function men()
    {
        return view('toko/men');
    }

    public function women()
    {
        return view('toko/women');
    }

    public function admin()
    {
        return view('toko/admin');
    }
}


