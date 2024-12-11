<?php

namespace App\Http\Controllers;
use App\Models\Sepatu;
use App\Models\Cart;


use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index()
    {
        // Ambil semua item keranjang
        $cartItems = Cart::with('sepatu')->get();

        // Kirim data ke view
        return view('cart.index', compact('cartItems'));
    }

    public function addToCart(Request $request, $id)
{
    $sepatu = Sepatu::find($id);

    if (!$sepatu) {
        return redirect()->back()->with('error', 'Sepatu tidak ditemukan.');
    }

    // Periksa jika sepatu sudah ada di keranjang
    $cartItem = Cart::where('sepatu_id', $id)->first();

    if ($cartItem) {
        $cartItem->quantity += 1; // Tambahkan jumlah
        $cartItem->save();
    } else {
        Cart::create([
            'sepatu_id' => $id,
            'quantity' => 1,
        ]);
    }

    return redirect()->route('cart.index')->with('success', 'Sepatu berhasil ditambahkan ke keranjang!');
}

}
