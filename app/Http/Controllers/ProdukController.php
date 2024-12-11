<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Kategori;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
     // Menampilkan halaman produk
     public function index()
    {
    $produks = Produk::with('kategori')->get(); // Memuat kategori bersamaan dengan produk
    return view('produk.index', compact('produks'));
    }

     public function card()
     {
         $produks = Produk::all();
         return view('produk.card', compact('produks'));
     }
 
     // Menampilkan form tambah produk
     public function create()
     {
         $kategoris = Kategori::all(); // Ambil semua kategori
         return view('produk.tambahproduk', compact('kategoris'));
     }
 
     // Menyimpan produk baru
     public function store(Request $request)
     {
         // Debug untuk memeriksa data yang dikirim
         dd($request->all());
     
         $request->validate([
             'nama' => 'required',
             'gambar' => 'required|url',
             'harga' => 'required|numeric',
             'deskripsi' => 'required',
             'kategori_id' => 'required|exists:kategoris,id', // Validasi kategori
         ]);
     
         Produk::create([
             'nama' => $request->nama,
             'gambar' => $request->gambar,
             'harga' => $request->harga,
             'deskripsi' => $request->deskripsi,
             'kategori_id' => $request->kategori_id, // Simpan kategori_id
         ]);
     
         return redirect()->route('produk.index');
     }     

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
            $produks = Produk::find($id);
            $produks->delete();
            return back()->with('success',' Penghapusan berhasil.');
            }
    }


}
