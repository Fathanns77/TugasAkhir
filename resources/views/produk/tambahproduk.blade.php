@extends('template')
@section('header')
@section('footer')
<h1 class="text-4xl text-center font-extrabold text-left pb-2 pt-12">TAMBAH PRODUK</h1>
<form action="{{ route('produk.store') }}" method="POST" class="pt-6 max-w-lg mx-auto bg-white shadow-md rounded px-8 py-6 ">
    @csrf
    <div class="mb-4">
        <label for="nama" class="block text-gray-700 font-bold mb-2">Nama Produk</label>
        <input 
            type="text" 
            name="nama" 
            id="nama" 
            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300" required >
    </div>

    <div class="mb-4">
    <label for="gambar" class="block text-gray-700 font-bold mb-2">Link Gambar Produk</label>
    
            <!-- Tempat menampilkan gambar preview -->
        <div id="imagePreviewContainer" class="mt-2 mb-4">
            <img id="imagePreview" src="" alt="Preview Image" class="rounded-lg shadow-lg hidden h-20 w-20">
        </div>

    <input 
        type="url" 
        name="gambar" 
        id="gambar" 
        placeholder="Masukkan URL gambar" 
        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300" 
        required 
        oninput="previewImage()">
    </div>

    <!-- js untuk preview img -->
    <script>
        function previewImage() {
            const imageUrl = document.getElementById('gambar').value;
            const imagePreview = document.getElementById('imagePreview');

            if (imageUrl) {
                imagePreview.style.display = 'block';
                imagePreview.src = imageUrl;
            } else {
                imagePreview.style.display = 'none';
            }
        }
    </script>

    
    <div class="mb-4">
    <label for="kategori_id" class="block text-gray-700 font-bold mb-2">
        Kategori
    </label>
    <select name="kategori_id" id="kategori_id" required
        class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        <option value="" disabled selected>-- Pilih Kategori --</option>
        @foreach($kategoris as $kategori)
            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
        @endforeach
    </select>
    </div>

    <div class="mb-4">
        <label for="harga" class="block text-gray-700 font-bold mb-2">Harga</label>
        <input 
            type="number" 
            name="harga" 
            id="harga" 
            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300" required >
    </div>

    <div class="mb-4">
        <label for="deskripsi" class="block text-gray-700 font-bold mb-2">Deskripsi</label>
        <textarea 
            name="deskripsi" 
            id="deskripsi" 
            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300" 
            rows="4" 
            required
        ></textarea>
    </div>

    <div class="py-4 flex justify-between">
        <a href="{{route('produk.index')}}">
        <button 
            type="submit" 
            class="bg-blue-500 text-white font-bold py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">
            Tambah Produk
        </button>
        </a>
        <a href="{{route('produk.index')}}" class="bg-green-500 text-white font-bold py-2 px-4 rounded-md hover:bg-green-600 focus:outline-none focus:ring focus:ring-green-300">
            Lihat Produk
        </a>
    </div>
</form>



@endsection