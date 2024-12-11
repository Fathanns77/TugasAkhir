@extends('template')
@section('header')
@section('footer')
  <div class="container mx-auto px-4">
  <div class="text-center pt-16">
        <h1 class="text-6xl font-extrabold">OUR SNEAKERS COLECTTION</h1>
        <p class="text-lg">look for whatever you want to look</p>
    </div>
   <!-- Nike Series -->
   <div class="px-32 text-left pb-4">
  <div class="flex items-center justify-between">
    <h1 class="text-2xl font-semibold italic">
     Nike Series
    </h1>

  </div>
  <hr class="border-t-4 border-black w-full px-32">
</div>
	<h1 class="text-4xl text-center font-extrabold text-left pb-2">AIR JORDAN SERIES</h1>
   <div class="px-8 grid px-28 grid-cols-4 ">
   	 <!-- Nike Shoes -->
   	 <!-- Nike Shoes -->
		@foreach ($produks as $produk)
		<!-- card sepatu -->
			<div class="p-4">
	<div class="bg-white max-w-2xl mx-auto transform transition-transform duration-300 hover:scale-105 border border-transparent hover:border-black transition-all duration-300">
		<!-- Bagian Gambar -->
		<div class="relative">
		<img src="{{ $produk->gambar }}" alt="Sepatu" class="w-full">
		<span class="absolute top-2 left-2 bg-black text-white text-xs uppercase font-semibold py-1 px-2 rounded">
			NEW
		</span>
		</div>

		<!-- Bagian Informasi -->
		<div class="p-4">
		<p class="text-gray-500 text-xs uppercase font-medium">{{ $produk->deskripsi }}</p>
		<h3 class="text-sm font-semibold text-gray-800">
		{{ $produk->nama }}
		</h3>
		<div class="flex items-center justify-between mt-2">
			<p class="text-lg font-bold text-gray-900">Rp. {{ number_format($produk->harga) }}</p>
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
			</svg>
		</div>
		</div>
	</div>
	</div>
	@endforeach
		

   </div>
   <!-- Adidas Series -->
   <div class="px-12 text-left pt-8 pb-4">
    <h1 class="text-6xl font-bold italic">
     ADIDAS SERIES
    </h1>
	<hr class="absolute border-t-4 border-black w-1/2 mx-auto"/>
   </div>
   <div class="grid grid-cols-4 gap-4">
    <!-- Adidas Shoes -->
   </div>
  </div>
@endsection