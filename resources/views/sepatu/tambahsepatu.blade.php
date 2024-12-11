@extends('template')
@section('header')
@section('footer')
<form action="{{ route('produk.store') }}" method="POST" class="pt-6">
    @csrf
    <div>
        <label for="nama">Nama Produk</label>
        <input type="text" name="nama" id="nama" required>
    </div>

    <div>
        <label for="gambar">Link Gambar Produk</label>
        <input type="url" name="gambar" id="gambar" required placeholder="Masukkan URL gambar">
    </div>

    <div>
        <label for="harga">Harga</label>
        <input type="number" name="harga" id="harga" required>
    </div>

    <div>
        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" id="deskripsi" required></textarea>
    </div>

    <div>
        <button type="submit">Tambah Produk</button>
    </div>
</form>
@endsection
