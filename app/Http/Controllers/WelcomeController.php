<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $produks = Produk::with('kategori')->get();
        return view('welcome', compact('produks'));
    }
}