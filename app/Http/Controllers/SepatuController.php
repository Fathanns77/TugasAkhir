<?php

namespace App\Http\Controllers;
use App\Models\Sepatu;

use Illuminate\Http\Request;

class SepatuController extends Controller
{
     // Menampilkan halaman sepatu
     public function index()
     {
         $sepatus = Sepatu::all();
         return view('sepatu.index', compact('sepatus'));
     }
 
     // Menampilkan form tambah sepatu
     public function create()
     {
         return view('sepatu.tambahsepatu');
     }
 
     // Menyimpan sepatu baru
     public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'nama' => 'required',
        'gambar' => 'required|url', // Validasi URL
        'harga' => 'required|numeric',
        'deskripsi' => 'required',
    ]);

    // Menyimpan data sepatu ke database dengan URL gambar
    sepatu::create([
        'nama' => $request->nama,
        'gambar' => $request->gambar,  // Menyimpan URL gambar langsung
        'harga' => $request->harga,
        'deskripsi' => $request->deskripsi,
    ]);

    return redirect()->route('sepatu.index');
}

}
