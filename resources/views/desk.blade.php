@extends('template')
@section('header')
@section('footer')
<div class="flex justify-center w-screen h-screen bg-white">
  <!-- Left Section -->
  <div class="flex bg-white pt-6 rounded-lg ">
    <div class="flex flex-col space-y-2 pr-4">
      <!-- t1 -->
      <img 
        src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/eb565318-308f-40bc-b9da-1db2cf863cc3/WMNS+AIR+JORDAN+1+LOW+SE.png"
        alt="Thumbnail 1"
        class="w-16 h-16 cursor-pointer border border-gray-300 hover:border-black rounded-lg"
        onclick="changeImage('https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/eb565318-308f-40bc-b9da-1db2cf863cc3/WMNS+AIR+JORDAN+1+LOW+SE.png')"/>

        <!-- t2 -->
        <img 
        src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/52943d9e-2af1-4845-af77-730abc2988c5/WMNS+AIR+JORDAN+1+LOW+SE.png"
        alt="Thumbnail 2"
        class="w-16 h-16 cursor-pointer border border-gray-300 hover:border-black rounded-lg"
        onclick="changeImage('https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/52943d9e-2af1-4845-af77-730abc2988c5/WMNS+AIR+JORDAN+1+LOW+SE.png')"/>

        <!-- t3 -->
        <img 
        src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/0f492b03-ba89-4908-8095-2844cbf3347b/WMNS+AIR+JORDAN+1+LOW+SE.png"
        alt="Thumbnail 3"
        class="w-16 h-16 cursor-pointer border border-gray-300 hover:border-black rounded-lg"
        onclick="changeImage('https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/0f492b03-ba89-4908-8095-2844cbf3347b/WMNS+AIR+JORDAN+1+LOW+SE.png')"/>

        <!--t4 -->
        <img 
        src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/d8c9c54c-ef6b-4d68-a1e7-8cd6088e1eb5/WMNS+AIR+JORDAN+1+LOW+SE.png"
        alt="Thumbnail 4"
        class="w-16 h-16 cursor-pointer border border-gray-300 hover:border-black rounded-lg"
        onclick="changeImage('https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/d8c9c54c-ef6b-4d68-a1e7-8cd6088e1eb5/WMNS+AIR+JORDAN+1+LOW+SE.png')"/>

        <!--t5 -->
        <img 
        src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/341fbc8b-fe61-44c1-884f-c1e7318141e7/WMNS+AIR+JORDAN+1+LOW+SE.png"
        alt="Thumbnail 5"
        class="w-16 h-16 cursor-pointer border border-gray-300 hover:border-black rounded-lg"
        onclick="changeImage('https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/341fbc8b-fe61-44c1-884f-c1e7318141e7/WMNS+AIR+JORDAN+1+LOW+SE.png')"/>

        <!--t6 -->
        <img 
        src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/fb9dc022-4357-43de-8009-14efb7994dc6/WMNS+AIR+JORDAN+1+LOW+SE.png"
        alt="Thumbnail 6"
        class="w-16 h-16 cursor-pointer border border-gray-300 hover:border-black rounded-lg"
        onclick="changeImage('https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/fb9dc022-4357-43de-8009-14efb7994dc6/WMNS+AIR+JORDAN+1+LOW+SE.png')"/>

        <!--t7 -->
        <img 
        src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/00641512-5855-4b64-8c02-721ebc3ca085/WMNS+AIR+JORDAN+1+LOW+SE.png"
        alt="Thumbnail 7"
        class="w-16 h-16 cursor-pointer border border-gray-300 hover:border-black rounded-lg"
        onclick="changeImage('https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/00641512-5855-4b64-8c02-721ebc3ca085/WMNS+AIR+JORDAN+1+LOW+SE.png')"/>

        <!--t8 -->
        <img 
        src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/add7e3bc-bfcc-4c30-bf19-b85a4ed89fe0/WMNS+AIR+JORDAN+1+LOW+SE.png"
        alt="Thumbnail 7"
        class="w-16 h-16 cursor-pointer border border-gray-300 hover:border-black rounded-lg"
        onclick="changeImage('https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/add7e3bc-bfcc-4c30-bf19-b85a4ed89fe0/WMNS+AIR+JORDAN+1+LOW+SE.png')"/>

    </div>
    <div class="relative">
      <img
        id="mainImage"
        class="rounded-lg"
        height="500"
        src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/eb565318-308f-40bc-b9da-1db2cf863cc3/WMNS+AIR+JORDAN+1+LOW+SE.png"
        width="500"
        alt="Main Image"
      />
      <div class="absolute top-2 left-2 bg-white px-2 py-1 rounded-full shadow-md">
        <i class="fas fa-star text-black"></i> Highly Rated
      </div>
    </div>
  </div>

  <!-- Right Section -->
  <div class="ml-8 bg-white pt-6 rounded-lg">
  <div class="flex justify-between items-center mb-4">
            <span class="text-gray-600">Wanita • Originals</span>
            <a href="#" class="text-gray-600 underline">Tulis Ulasan</a>
        </div>
        <h1 class="text-3xl font-semibold italic">Air Jordan 1 Low SE</h1>
        <p class="text-gray-600 mb-1">Colour Shown: White/White/Pink Foam/Glacier Blue</p>
        <div class="flex items-center mb-4">
            <span class="text-grey-500 text-xl font-semibold">Rp. 1.850.000</span>
        </div>
        <h2 class="text-lg font-bold mb-2">PILIH SIZE</h2>
        <div class="flex space-x-4 mb-4">
            <div class="grid grid-cols-4 gap-2 mt-2">
            <button class="border p-2 border border-gray-300 hover:border-black rounded-md">
                EU 40
            </button>
            <button class="border p-2 border border-gray-300 hover:border-black rounded-md">
                EU 40.5
            </button>
            <button class="border p-2 border border-gray-300 hover:border-black rounded-md">
                EU 41
            </button>
            <button class="border p-2 border border-gray-300 hover:border-black rounded-md">
                EU 42
            </button>
            <button class="border p-2 border border-gray-300 hover:border-black rounded-md">
                EU 42.5
            </button>
            <button class="border p-2 border border-gray-300 hover:border-black rounded-md">
                EU 43
            </button>
            <button class="border p-2 border border-gray-300 hover:border-black rounded-md">
                EU 44
            </button>
            <button class="border p-2 border border-gray-300 hover:border-black rounded-md">
                EU 44.5
            </button>
            <button class="border p-2 border border-gray-300 hover:border-black rounded-md">
                EU 45
            </button>
            <button class="border p-2 border border-gray-300 hover:border-black rounded-md">
                EU 45.5
            </button>
            <button class="border p-2 border border-gray-300 hover:border-black rounded-md">
                EU 46
            </button>
            <button class="border p-2 border border-gray-300 hover:border-black rounded-md">
                EU 47.5
            </button>
            </div>
        </div>
        <p class="text-green-600 mb-4">Tersedia</p>
        <div class="flex items-center mb-4">
            <a href="#" class="text-gray-600 underline flex items-center">
                <i class="fas fa-ruler mr-2"></i>PANDUAN UKURAN
            </a>
            <a href="#" class="text-gray-600 underline ml-4 flex items-center">
                <i class="fas fa-envelope mr-2"></i>Ukuran yang dipilih habis?
            </a>
        </div>
        <div class="space-y-1">
        <button class="bg-black text-white py-3 px-6 w-full flex items-center justify-between">
            <span>TAMBAH KE KERANJANG</span>
            <i class="fas fa-arrow-right"></i>
        </button>
        <button class="bg-white text-black py-3 px-6 w-full flex items-center justify-between border border-grey hover:border-black">
            <span>TAMBAH KE FAVORIT</span>
            <i class="fas fa-arrow-right"></i>
        </button>
        </div>
        <div class="flex items-center justify-between mt-4">
            <a href="#" class="text-gray-600 underline flex items-center">
                <i class="fas fa-info-circle mr-2"></i>Learn More
            </a>
            <span class="text-gray-600">Free Delivery</span>
        </div>
        <div class="flex items-center justify-between mt-4">
            <button class="border border-gray-400 p-2">
                <i class="fas fa-heart"></i>
            </button>
            <button class="bg-black text-white p-2">
                <i class="fas fa-comments text-red-500"></i>
            </button>
        </div>
  </div>
</div>

<div class="max-w-5xl mx-auto">
        <h1 class="text-3xl font-bold mb-2">AIR JORDAN 1 LOW SE</h1>
        <h2 class="text-lg italic mb-4">Step with Style, Leave Paw-sitive Prints</h2>
        <p class="text-base leading-relaxed justify pb-1">       
        Air Jordan 1 Low SE "Furry Friends Edition" menghadirkan sentuhan manis pada siluet klasik tahun 1985 dengan detail unik seperti tali bertekstur menyerupai bulu hewan dan motif jejak kaki di outsole. Dengan bahan premium, bantalan khas Air untuk kenyamanan, dan logo ikonik Air Jordan Wings, sepatu ini memadukan gaya timeless dengan penghormatan kepada sahabat berbulu Anda. Cocok untuk melengkapi gaya kasual sekaligus menunjukkan kecintaan pada hewan peliharaan, sepatu ini adalah pilihan sempurna untuk penggemar sneaker yang ingin tampil beda.
        </p>
    </div>


  <div class="px-64 pt-8">
    <div class="flex">
  <h1 class="text-4xl font-extrabold text-left pb-4 ">YOU MIGHT ALSO LIKE</h1>
  <span class="text-1xl font-semibold text-right pl-1">NIKE SERIES</span>
  </div>
  <div class="flex overflow-x-auto space-x-4">
    <!-- Card 1 -->
    <div class="bg-white flex-shrink-0 w-72 border border-gray-300 hover:border-black ">
      <div class="relative">
      <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/ffc8d042-9f54-4b3b-99e8-9971c951cd80/NIKE+DUNK+LOW+RETRO+SE.png" alt="Sepatu" class="w-full">
		<span class="absolute top-2 left-2 bg-green-400 text-white text-xs uppercase font-semibold py-1 px-2 rounded">
			15% OFF
		</span>
		</div>

		<!-- Bagian Informasi -->
		<div class="p-4">
		<p class="text-gray-500 text-xs uppercase font-medium">Men Shoes</p>
		<h3 class="text-sm font-semibold text-gray-800">
			Nike Dunk Low Retro SE
		</h3>
		<div class="flex items-center justify-between mt-2">
			<p class="text-lg text-gray-900">Rp. 1.300.000 <span class="line-through text-red-500 text-sm">1.900.000</span></p>
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
			</svg>
		</div>
      </div>
    </div>
    <!-- Card 1 -->
    <div class="bg-white flex-shrink-0 w-72 border border-gray-300 hover:border-black ">
      <div class="relative">
        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/b2f5ef26-08ea-430b-84b5-d8637aba0772/NIKE+DUNK+LOW+QS.png" alt="Sepatu" class="w-full">
		<span class="absolute top-2 left-2 bg-black text-white text-xs uppercase font-semibold py-1 px-2 rounded">
			NEW
		</span>
		</div>

		<!-- Bagian Informasi -->
		<div class="p-4">
		<p class="text-gray-500 text-xs uppercase font-medium">Men Shoes</p>
		<h3 class="text-sm font-semibold text-gray-800">
			Nike Dunk Low
		</h3>
		<div class="flex items-center justify-between mt-2">
			<p class="text-lg  text-gray-900">Rp. 1.900.000</p>
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
			</svg>
		</div>
		</div>
    </div>
    <!-- Card 1 -->
    <div class="bg-white flex-shrink-0 w-72 border border-gray-300 hover:border-black ">
      <div class="relative">
      <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/bd2b4147-1a7c-437e-abf8-dc59bb1c3609/NIKE+SB+DUNK+LOW+QS.png" alt="Sepatu" class="w-full">
		<span class="absolute top-2 left-2 bg-black text-white text-xs uppercase font-semibold py-1 px-2 rounded">
			NEW
		</span>
		</div>

		<!-- Bagian Informasi -->
		<div class="p-4">
		<p class="text-gray-500 text-xs uppercase font-medium">Men Shoes</p>
		<h3 class="text-sm font-semibold text-gray-800">
			Nike Dunk Low SB
		</h3>
		<div class="flex items-center justify-between mt-2">
			<p class="text-lg  text-gray-900">Rp. 1.900.000</p>
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
			</svg>
		</div>
      </div>
    </div>
    <!-- Card 1 -->
    <div class="bg-white flex-shrink-0 w-72 border border-gray-300 hover:border-black ">
      <div class="relative">
      <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/6c94e34c-7725-4cbf-8d59-91056e360226/NIKE+DUNK+LOW+RETRO.png" alt="Sepatu" class="w-full">
		<span class="absolute top-2 left-2 bg-black text-white text-xs uppercase font-semibold py-1 px-2 rounded">
			NEW
		</span>
		</div>

		<!-- Bagian Informasi -->
		<div class="p-4">
		<p class="text-gray-500 text-xs uppercase font-medium">Men Shoes</p>
		<h3 class="text-sm font-semibold text-gray-800">
			Nike Dunk Low RETRO
		</h3>
		<div class="flex items-center justify-between mt-2">
			<p class="text-lg  text-gray-900">Rp. 1.450.000</p>
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
			</svg>
		</div>
      </div>
    </div>
    <!-- Card 1 -->
    <div class="bg-white flex-shrink-0 w-72 border border-gray-300 hover:border-black ">
      <div class="relative">
      <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/21b97632-1750-4898-8de4-6f8418c0db19/NIKE+DUNK+LOW+RETRO+PRM.png" alt="Sepatu" class="w-full">
		<span class="absolute top-2 left-2 bg-black text-white text-xs uppercase font-semibold py-1 px-2 rounded">
			NEW
		</span>
		</div>

		<!-- Bagian Informasi -->
		<div class="p-4">
		<p class="text-gray-500 text-xs uppercase font-medium">Men Shoes</p>
		<h3 class="text-sm font-semibold text-gray-800">
			Nike Dunk Low Retro Premium
		</h3>
		<div class="flex items-center justify-between mt-2">
			<p class="text-lg  text-gray-900">Rp 1.850.000</p>
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
			</svg>
		</div>
      </div>
    </div>
    <!-- Card 1 -->
    <div class="bg-white flex-shrink-0 w-72 border border-gray-300 hover:border-black ">
      <div class="relative">
      <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/c62dc34f-c216-4029-b476-232651c03868/NIKE+DUNK+LOW+SE.png" alt="Sepatu" class="w-full">
		<span class="absolute top-2 left-2 bg-black text-white text-xs uppercase font-semibold py-1 px-2 rounded">
			NEW
		</span>
		</div>

		<!-- Bagian Informasi -->
		<div class="p-4">
		<p class="text-gray-500 text-xs uppercase font-medium">Men Shoes</p>
		<h3 class="text-sm font-semibold text-gray-800">
			Nike Dunk Low SE
		</h3>
		<div class="flex items-center justify-between mt-2">
			<p class="text-lg  text-gray-900">Rp. 1.700.000</p>
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
			</svg>
		</div>
      </div>
    </div>


    <!-- Tambahkan Card lainnya dengan format yang sama -->
  </div>
</div>
  <div class="px-64 pt-8">
    <div class="flex">
  <h1 class="text-4xl font-extrabold text-left pb-4 ">YOU MIGHT ALSO LIKE</h1>
  <span class="text-1xl font-semibold text-right pl-1">ADIDAS SERIES</span>
  </div>
  <div class="flex overflow-x-auto space-x-4">
    <!-- Card 1 -->
    <div class="bg-white flex-shrink-0 w-72 border border-gray-300 hover:border-black ">
      <div class="relative">
      <img src="https://www.adidas.co.id/media/catalog/product/cache/da73f7d26ad11f1980ada40c1f6e78fa/b/7/b75807_sl_ecom.jpg" alt="Sepatu" class="w-full">
		<span class="absolute top-2 left-2 bg-black text-white text-xs uppercase font-semibold py-1 px-2 rounded">
			NEW
		</span>
		</div>

		<!-- Bagian Informasi -->
		<div class="p-4">
		<p class="text-gray-500 text-xs uppercase font-medium">Men Shoes</p>
		<h3 class="text-sm font-semibold text-gray-800">
			Samba OG Shoes
		</h3>
		<div class="flex items-center justify-between mt-2">
			<p class="text-lg text-gray-900">Rp. 2.000.000 </p>
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
			</svg>
		</div>
      </div>
    </div>
    <!-- Card 1 -->
    <div class="bg-white flex-shrink-0 w-72 border border-gray-300 hover:border-black ">
      <div class="relative">
        <img src="https://www.adidas.co.id/media/catalog/product/cache/da73f7d26ad11f1980ada40c1f6e78fa/i/g/ig1025_2_footwear_photography_side20lateral20view_grey.jpg" alt="Sepatu" class="w-full">
		<span class="absolute top-2 left-2 bg-black text-white text-xs uppercase font-semibold py-1 px-2 rounded">
			NEW
		</span>
		</div>

		<!-- Bagian Informasi -->
		<div class="p-4">
		<p class="text-gray-500 text-xs uppercase font-medium">Men Shoes</p>
		<h3 class="text-sm font-semibold text-gray-800">
			Samba OG Shoes
		</h3>
		<div class="flex items-center justify-between mt-2">
			<p class="text-lg  text-gray-900">Rp. 2.000.000</p>
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
			</svg>
		</div>
		</div>
    </div>
    <!-- Card 1 -->
    <div class="bg-white flex-shrink-0 w-72 border border-gray-300 hover:border-black ">
      <div class="relative">
      <img src="https://www.adidas.co.id/media/catalog/product/cache/da73f7d26ad11f1980ada40c1f6e78fa/i/e/ie9170_2_footwear_photography_side20lateral20view_grey.jpg" alt="Sepatu" class="w-full">
		<span class="absolute top-2 left-2 bg-black text-white text-xs uppercase font-semibold py-1 px-2 rounded">
			NEW
		</span>
		</div>

		<!-- Bagian Informasi -->
		<div class="p-4">
		<p class="text-gray-500 text-xs uppercase font-medium">Men Shoes</p>
		<h3 class="text-sm font-semibold text-gray-800">
			Samba OG Shoes
		</h3>
		<div class="flex items-center justify-between mt-2">
			<p class="text-lg  text-gray-900">Rp. 2.000.000</p>
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
			</svg>
		</div>
      </div>
    </div>
    <!-- Card 1 -->
    <div class="bg-white flex-shrink-0 w-72 border border-gray-300 hover:border-black ">
      <div class="relative">
      <img src="https://www.adidas.co.id/media/catalog/product/cache/da73f7d26ad11f1980ada40c1f6e78fa/i/e/ie9169_2_footwear_photography_side20lateral20view_grey.jpg" alt="Sepatu" class="w-full">
		<span class="absolute top-2 left-2 bg-black text-white text-xs uppercase font-semibold py-1 px-2 rounded">
			NEW
		</span>
		</div>

		<!-- Bagian Informasi -->
		<div class="p-4">
		<p class="text-gray-500 text-xs uppercase font-medium">Men Shoes</p>
		<h3 class="text-sm font-semibold text-gray-800">
			Samba OG Shoes 
		</h3>
		<div class="flex items-center justify-between mt-2">
			<p class="text-lg  text-gray-900">Rp. 2.000.000</p>
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
			</svg>
		</div>
      </div>
    </div>
    <!-- Card 1 -->
    <div class="bg-white flex-shrink-0 w-72 border border-gray-300 hover:border-black ">
      <div class="relative">
      <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/21b97632-1750-4898-8de4-6f8418c0db19/NIKE+DUNK+LOW+RETRO+PRM.png" alt="Sepatu" class="w-full">
		<span class="absolute top-2 left-2 bg-black text-white text-xs uppercase font-semibold py-1 px-2 rounded">
			NEW
		</span>
		</div>

		<!-- Bagian Informasi -->
		<div class="p-4">
		<p class="text-gray-500 text-xs uppercase font-medium">Men Shoes</p>
		<h3 class="text-sm font-semibold text-gray-800">
			Samba OG Shoes
		</h3>
		<div class="flex items-center justify-between mt-2">
			<p class="text-lg  text-gray-900">Rp 1.850.000</p>
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
			</svg>
		</div>
      </div>
    </div>
    <!-- Card 1 -->
    <div class="bg-white flex-shrink-0 w-72 border border-gray-300 hover:border-black ">
      <div class="relative">
      <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/c62dc34f-c216-4029-b476-232651c03868/NIKE+DUNK+LOW+SE.png" alt="Sepatu" class="w-full">
		<span class="absolute top-2 left-2 bg-black text-white text-xs uppercase font-semibold py-1 px-2 rounded">
			NEW
		</span>
		</div>

		<!-- Bagian Informasi -->
		<div class="p-4">
		<p class="text-gray-500 text-xs uppercase font-medium">Men Shoes</p>
		<h3 class="text-sm font-semibold text-gray-800">
			Samba OG Shoes
		</h3>
		<div class="flex items-center justify-between mt-2">
			<p class="text-lg  text-gray-900">Rp. 1.700.000</p>
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
			</svg>
		</div>
      </div>
    </div>


    <!-- Tambahkan Card lainnya dengan format yang sama -->
  </div>
</div>

  <script>
    // JavaScript function to change the main image
    function changeImage(imageUrl) {
      document.getElementById("mainImage").src = imageUrl;
    }
  </script>
@endsection
