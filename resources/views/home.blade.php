@extends('template')
@section('header')
@section('footer')
        <!-- Hero Section -->
        <section class="relative text-white">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://www.adidas.co.id/media/scandiweb/slider/h/p/hp_glp_masthead_desktop_1920x720px_6.jpg');"></div>
            
            <div class="container mx-auto px-24 py-24 md:py-32 relative z-10">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <!-- Left Side: Company Info -->
                    <div class="w-full md:w-1/2 mb-12 md:mb-0">
                        <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                            Innovate.<br>Transform.<br>Succeed.
                        </h1>
                        <p class="text-xl mb-8 text-gray-300">Langkah nyaman dan gaya elegan dengan harga <br>yang tidak akan membuat Anda kelaparan.</p>
                        <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="{{ url('card')}}"
                            class="inline-block bg-white text-black text-lg font-bold py-3 px-6 hover:bg-black hover:text-white transition">
                            DAPATKAN SEKARANG!
                        </a>
                        </div>
                    </div>
        </section>

        <!-- introduction -->
         <!--  -->
<div class="py-16 mx-auto max-w-screen-xl pb-16">
 <div class="bg-white text-gray-900">
  <main class="flex items-center justify-between p-8">
   <div class="max-w-lg">
    <h1 class="text-5xl font-bold mb-4">
     SHOP ALL TYPES OF SHOES
    </h1>
    <p class="text-lg text-gray-600">
     Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    </p>
   </div>
   <div>
    <img alt="A pair of black and white sneakers" class="w-full h-auto" height="400" src="{{ url('image/sepatunike.png') }}" width="600"/>
   </div>
  </main>
 </div>
</div>


<!-- Heading -->
<div class="text-center pb-16">
        <p class="text-sm font-bold">TrendyWalk</p>
        <h1 class="text-6xl font-extrabold">OUR COLECTTION</h1>
        <p class="text-lg">look for whatever you want to look for</p>
        <button class="bg-black text-white py-2 px-6 rounded-full text-sm">Shop Now</button>
    </div>


<!-- -->
  <div class="container mx-auto px-12">
   <h1 class="text-2xl italic">
    The Latest
   </h1>
   <div class="flex space-x-4 ">
    <!-- First Item -->
    <div class="relative w-1/3">
     <img alt="Person running wearing Nike Pegasus 41 PRM shoes" class="w-full h-full object-cover" src="https://static.nike.com/a/images/f_auto/dpr_2.0,cs_srgb/h_477,c_limit/0bf28d64-7630-4151-b130-e6ee10c892e6/image.png"/>
     <div class="absolute bottom-4 left-4 text-white">
      <h2 class="text-xl font-semibold">
      Nothing Beats The CITY
      </h2>
	  <a href="{{ url('card')}}">
      <div class="mt-2 px-4 py-2 bg-white text-black rounded-full">
       Shop Now
      </div>
	  </a>
     </div>
    </div>
    <!-- Second Item -->
    <div class="relative w-1/3">
     <img alt="Mercurial Cosmic Speed shoes" class="w-full h-full object-cover" src="https://static.nike.com/a/images/f_auto/dpr_1.0,cs_srgb/h_2492,c_limit/d9c481f3-eb44-4718-a7d2-3f75b5c8f495/nike-football.png"/>
     <div class="absolute bottom-4 left-4 text-white">
      <h2 class="text-xl font-semibold">
       Mercurial Cosmic Speed
      </h2>
      <button class="mt-2 px-4 py-2 bg-white text-black rounded-full">
       Shop Now
      </button>
     </div>
    </div>
    <div class="relative w-1/3">
     <img alt="Mercurial Cosmic Speed shoes" class="w-full h-full object-cover" src="{{ url('image/samba.png') }}"/>
     <div class="absolute bottom-4 left-4 text-white">
      <h2 class="text-xl font-semibold">
       Samba Colecttion
      </h2>
	  <a href="{{ url('card')}}#adidas">
      <button class="mt-2 px-4 py-2 bg-white text-black rounded-full">
       Shop Now
      </button>
	  </a>
     </div>
    </div>

    <!-- Third Item -->
    <div class="relative w-1/3">
     <img alt="Cat looking at a pair of shoes with a city background" class="w-full h-full object-cover" src="https://www.adidas.co.id/media/wysiwyg/TC-ZNE_BABYMONSTER.png"/>
     <div class="absolute bottom-4 left-4 text-white">
      <h2 class="text-xl font-semibold">
       Adidas SportWear
      </h2>
      <button class="mt-2 px-4 py-2 bg-white text-black rounded-full">
       Shop Now
      </button>
     </div>
    </div>
   </div>
  </div>

<!-- Heading -->
<div class="text-center py-12">
        <p class="text-sm font-bold">TrendyWalk</p>
        <h1 class="text-6xl font-extrabold">OUR BEST SELLER PRODUCT</h1>
        <p class="text-lg">look for whatever you want to look for</p>
    </div>

  <!-- best seller nike -->
  <div class="px-52">
  <h1 class="text-4xl text-center font-extrabold text-left pb-2">NIKE SERIES</h1>
  <div class="flex overflow-x-auto">
  <div class="js-swiper-infinite-loop swiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
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
    <!-- end card -->
    </div>
    <div class="swiper-slide">
     <!-- Card 2 -->
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
    <!-- end card -->
    </div>
    <div class="swiper-slide">
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
    <!-- end card -->
    </div>
    <div class="swiper-slide">
    <!-- Card 4 -->
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
    <!-- end cart -->
    </div>
    <div class="swiper-slide">
     <!-- Card 5 -->
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
    <!-- end cart -->
    </div>
    <div class="swiper-slide">
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
<!-- end cart -->
    </div>
  </div>

  <div class="js-swiper-infinite-loop-button-next"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="navigate-next">
  <path fill="none" d="M0 0h24v24H0V0z"></path>
  <path d="M10.02 18l6-6-6-6-1.41 1.41L13.19 12l-4.58 4.59z"></path>
</svg></div>
  <div class="js-swiper-infinite-loop-button-prev"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="navigate-before">
  <path fill="none" d="M0 0h24v24H0V0z"></path>
  <path d="M14.2 6l-6 6 6 6 1.41-1.41L11.03 12l4.58-4.59z"></path>
</svg></div>
</div>


</div>
    <!-- Tambahkan Card lainnya dengan format yang sama -->
  </div>
</div>


<!-- best seller adidas -->
<div class="px-52">
  <h1 class="text-4xl text-center font-extrabold text-left pb-2 pt-8">ADIDAS SERIES</h1>
  <div class="flex overflow-x-auto">
  <div class="js-swiper-infinite-loop swiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
     <!-- Card 1 -->
     <div class="bg-white flex-shrink-0 w-72 border border-gray-300 hover:border-black ">
      <div class="relative">
      <img src="https://www.adidas.co.id/media/catalog/product/cache/da73f7d26ad11f1980ada40c1f6e78fa/b/7/b75807_sl_ecom.jpg" alt="Sepatu" class="w-full">
		<span class="absolute top-2 left-2 bg-green-400 text-white text-xs uppercase font-semibold py-1 px-2 rounded">
			15% OFF
		</span>
		</div>

		<!-- Bagian Informasi -->
		<div class="p-4">
		<p class="text-gray-500 text-xs uppercase font-medium">Men Shoes</p>
		<h3 class="text-sm font-semibold text-gray-800">
			SAMBA OG SHOES
		</h3>
		<div class="flex items-center justify-between mt-2">
			<p class="text-lg text-gray-900">Rp. 1.400.000 <span class="line-through text-red-500 text-sm">2.000.000</span></p>
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
			</svg>
		</div>
      </div>
    </div>
    <!-- end card -->
    </div>
    <div class="swiper-slide">
     <!-- Card 2 -->
     <div class="bg-white flex-shrink-0 w-72 border border-gray-300 hover:border-black ">
      <div class="relative">
        <img src="https://www.adidas.co.id/media/catalog/product/cache/da73f7d26ad11f1980ada40c1f6e78fa/B/7/B75806_SL_eCom.jpg" alt="Sepatu" class="w-full">
		<span class="absolute top-2 left-2 bg-black text-white text-xs uppercase font-semibold py-1 px-2 rounded">
			NEW
		</span>
		</div>

		<!-- Bagian Informasi -->
		<div class="p-4">
		<p class="text-gray-500 text-xs uppercase font-medium">Men Shoes</p>
		<h3 class="text-sm font-semibold text-gray-800">
			SAMBA OG SHOES
		</h3>
		<div class="flex items-center justify-between mt-2">
			<p class="text-lg  text-gray-900">Rp. 2.000.000</p>
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
			</svg>
		</div>
		</div>
    </div>
    <!-- end card -->
    </div>
    <div class="swiper-slide">
    <div class="bg-white flex-shrink-0 w-72 border border-gray-300 hover:border-black ">
      <div class="relative">
      <img src="https://www.adidas.co.id/media/catalog/product/cache/da73f7d26ad11f1980ada40c1f6e78fa/i/e/ie9099_2_footwear_photography_side20lateral20view_grey.jpg" alt="Sepatu" class="w-full">
		<span class="absolute top-2 left-2 bg-black text-white text-xs uppercase font-semibold py-1 px-2 rounded">
			NEW
		</span>
		</div>

		<!-- Bagian Informasi -->
		<div class="p-4">
		<p class="text-gray-500 text-xs uppercase font-medium">Men Shoes</p>
		<h3 class="text-sm font-semibold text-gray-800">
			SAMBA OG SHOES
		</h3>
		<div class="flex items-center justify-between mt-2">
			<p class="text-lg  text-gray-900">Rp. 2.000.000</p>
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
			</svg>
		</div>
      </div>
    </div>
    <!-- end card -->
    </div>
    <div class="swiper-slide">
    <!-- Card 4 -->
    <div class="bg-white flex-shrink-0 w-72 border border-gray-300 hover:border-black ">
      <div class="relative">
      <img src="https://www.adidas.co.id/media/catalog/product/cache/da73f7d26ad11f1980ada40c1f6e78fa/j/i/ji2044_2_footwear_photography_side20lateral20view_grey.jpg" alt="Sepatu" class="w-full">
		<span class="absolute top-2 left-2 bg-black text-white text-xs uppercase font-semibold py-1 px-2 rounded">
			NEW
		</span>
		</div>

		<!-- Bagian Informasi -->
		<div class="p-4">
		<p class="text-gray-500 text-xs uppercase font-medium">Men Shoes</p>
		<h3 class="text-sm font-semibold text-gray-800">
			SAMBA OG SHOES
		</h3>
		<div class="flex items-center justify-between mt-2">
			<p class="text-lg  text-gray-900">Rp. 2.000.000</p>
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
			</svg>
		</div>
      </div>
    </div>
    <!-- end cart -->
    </div>
    <div class="swiper-slide">
     <!-- Card 5 -->
     <div class="bg-white flex-shrink-0 w-72 border border-gray-300 hover:border-black ">
      <div class="relative">
      <img src="https://www.adidas.co.id/media/catalog/product/cache/da73f7d26ad11f1980ada40c1f6e78fa/i/h/ih4881_2_footwear_photography_side20lateral20view_grey.jpg" alt="Sepatu" class="w-full">
		<span class="absolute top-2 left-2 bg-black text-white text-xs uppercase font-semibold py-1 px-2 rounded">
			NEW
		</span>
		</div>

		<!-- Bagian Informasi -->
		<div class="p-4">
		<p class="text-gray-500 text-xs uppercase font-medium">Men Shoes</p>
		<h3 class="text-sm font-semibold text-gray-800">
			SAMBA OG SHOES
		</h3>
		<div class="flex items-center justify-between mt-2">
			<p class="text-lg  text-gray-900">Rp 1.850.000</p>
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
			</svg>
		</div>
      </div>
    </div>
    <!-- end cart -->
    </div>
    <div class="swiper-slide">
    <div class="bg-white flex-shrink-0 w-72 border border-gray-300 hover:border-black ">
      <div class="relative">
      <img src="https://www.adidas.co.id/media/catalog/product/cache/da73f7d26ad11f1980ada40c1f6e78fa/i/g/ig1962_2_footwear_photography_side20lateral20view_grey.jpg" alt="Sepatu" class="w-full">
		<span class="absolute top-2 left-2 bg-black text-white text-xs uppercase font-semibold py-1 px-2 rounded">
			NEW
		</span>
		</div>

		<!-- Bagian Informasi -->
		<div class="p-4">
		<p class="text-gray-500 text-xs uppercase font-medium">Men Shoes</p>
		<h3 class="text-sm font-semibold text-gray-800">
			SAMBA OG SHOES
		</h3>
		<div class="flex items-center justify-between mt-2">
			<p class="text-lg  text-gray-900">Rp. 2.000.000</p>
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
			</svg>
		</div>
      </div>
    </div>
<!-- end cart -->
    </div>
  </div>

  <div class="js-swiper-infinite-loop-button-next"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="navigate-next">
  <path fill="none" d="M0 0h24v24H0V0z"></path>
  <path d="M10.02 18l6-6-6-6-1.41 1.41L13.19 12l-4.58 4.59z"></path>
</svg></div>
  <div class="js-swiper-infinite-loop-button-prev"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="navigate-before">
  <path fill="none" d="M0 0h24v24H0V0z"></path>
  <path d="M14.2 6l-6 6 6 6 1.41-1.41L11.03 12l4.58-4.59z"></path>
</svg></div>
</div>


</div>
    <!-- Tambahkan Card lainnya dengan format yang sama -->
  </div>

	<!-- penjelasan -->
	<div class="container mx-auto px-32 pt-24">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h3 class="font-bold text-lg mb-4">DAPATKAN KOLEKSI SEPATU BARU BERKUALITAS DI TRENDYWALK : LANGKAH NYAMAN DAN GAYA ELEGAN</h3>
                <p class="text-gray-700 mb-4 text-sm text-justify">
				Selamat datang di Trendywalk, distributor sepatu baru terkemuka di Indonesia yang menyediakan koleksi sepatu berkualitas untuk berbagai kebutuhan Anda. Kami menawarkan beragam pilihan sepatu mulai dari sepatu formal, kasual, hingga sepatu olahraga yang stylish dan nyaman. Di Trendywalk, Anda dapat menemukan produk terbaik dengan berbagai pilihan desain modern yang cocok untuk berbagai kesempatan. Temukan sepatu pilihan Anda mulai dari sepatu pria, wanita, hingga anak-anak, hanya di Trendywalk Indonesia. <br>

				Kami terus menghadirkan koleksi terbaru sehingga Anda selalu mendapatkan model terkini yang sesuai dengan tren. Mulai dari sepatu untuk kebutuhan harian hingga sepatu khusus untuk aktivitas tertentu, Trendywalk adalah solusi tepat untuk Anda yang ingin tampil percaya diri dan nyaman.
                </p>
            </div>
            <div>
                <h3 class="font-bold text-lg mb-4">TRENDYWALK MENYEDIAKAN SEMUA KEBUTUHAN SEPATU UNTUK ANDA</h3>
                <p class="text-gray-700 mb-4 text-sm text-justify">
				Mencari sepatu berkualitas yang nyaman dan bergaya? Hanya ada satu tempat yang menyediakan semua kebutuhan sepatu Anda, yaitu Trendywalk Indonesia. Kami menawarkan berbagai jenis sepatu yang dirancang dengan teknologi terkini untuk kenyamanan maksimal, mulai dari sepatu kerja, sepatu olahraga, hingga sepatu kasual.
				Belanja di Trendywalk semakin menyenangkan dengan berbagai penawaran menarik, seperti:
				Gratis ongkir untuk pembelian tertentu, 
				Kemudahan pengembalian produk, 
				Respon cepat untuk layanan pelanggan, 
				Dan berbagai promo spesial lainnya.
				Jangan ragu untuk memilih sepatu favorit Anda di Trendywalk Indonesia. Temukan koleksi sepatu baru yang sesuai dengan gaya dan kebutuhan Anda sekarang juga!</p>
            </div>
        </div>
    </div>

<!-- JS Plugins Init. -->
<script>
  (function() {
    // INITIALIZATION OF SWIPER
    // =======================================================
    var infiniteLoop = new Swiper('.js-swiper-infinite-loop', {
      slidesPerView: 3.75,
      spaceBetween: 30,
      loop: true,
      pagination: {
        clickable: true,
      },
      navigation: {
        nextEl: '.js-swiper-infinite-loop-button-next',
        prevEl: '.js-swiper-infinite-loop-button-prev',
      },
    });
  })()
</script>
@endsection

