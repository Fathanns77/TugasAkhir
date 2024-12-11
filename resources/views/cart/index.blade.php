@extends('template')
@section('header')
@section('footer')
    <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
  <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
    <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Shopping Cart</h2>
    @if ($cartItems->isEmpty())
        <p>Keranjang Anda kosong.</p>
    @else

    <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
      <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
        <div class="space-y-6">
          <div class=" bg-white  dark:border-gray-700 dark:bg-gray-800 space-y-6">
            <!-- cart -->
            @foreach ($cartItems as $item)
            <div class=" md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
              <a href="#" class="">
                <img class="h-40 w-40 dark:hidden" src="{{ $item->sepatu->gambar }}" alt="{{ $item->sepatu->nama }}" />
                <img class="hidden h-20 w-20 dark:block" src="" alt="imac image" />
              </a>

              <label for="counter-input" class="sr-only">Choose quantity:</label>
              <div class="flex items-center justify-between md:order-3 md:justify-end">
                <div class="flex items-center pr-2">
                  <button type="button" id="decrement-button" data-input-counter-decrement="counter-input" class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                    <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                    </svg>
                  </button>
                  <input type="text" id="counter-input" data-input-counter class="w-10 shrink-0 border-0 bg-transparent text-center text-sm font-medium text-gray-900 focus:outline-none focus:ring-0 dark:text-white" placeholder="{{ $item->quantity }}" value="{{ $item->quantity }}" required />
                  <button type="button" id="increment-button" data-input-counter-increment="counter-input" class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                    <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                    </svg>
                  </button>
                </div>
                <div class="text-end">
                  <p class="text-base font-bold text-gray-900 dark:text-white">Rp {{ number_format($item->sepatu->harga * $item->quantity) }}</p>
                </div>
              </div>

              <div class="w-full min-w-0 flex-1">
                <a href="#" class="text-base font-medium text-gray-900 hover:underline dark:text-white">{{ $item->sepatu->nama }}</a>
                <p class="text-gray-600 mb-1">Colour Shown: White/White/Pink Foam/Glacier Blue</p>
                <p class="text-gray-600 mb-1">Women Shoes</p>
                <p class="text-gray-600 mb-1">Size : EU 39</p>
                <p class="text-gray-600 mb-1">Tersedia : </p>
                <div class="flex items-center gap-4 mt-1">
                  <button type="button" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-900 hover:underline dark:text-gray-400 dark:hover:text-white">
                    <svg class="me-1.5 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                    </svg>
                    Add to Favorites
                  </button>

                  <button type="button" class="inline-flex items-center text-sm font-medium text-red-600 hover:underline dark:text-red-500">
                    <svg class="me-1.5 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                    </svg>
                    Remove
                  </button>
                </div>
              </div>
            </div>
            @endforeach

    <!-- end cart 1 -->

          </div>
        </div>
      </div>


      <div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
        <div class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
          <p class="text-xl font-semibold text-gray-900 dark:text-white">Order summary</p>

          <div class="space-y-4">
            <div class="space-y-2">
              <dl class="flex items-center justify-between gap-4">
                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Original price</dt>
                <dd class="text-base font-medium text-gray-900 dark:text-white">$7,592.00</dd>
              </dl>

              <dl class="flex items-center justify-between gap-4">
                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Savings</dt>
                <dd class="text-base font-medium text-green-600">-$299.00</dd>
              </dl>

              <dl class="flex items-center justify-between gap-4">
                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Store Pickup</dt>
                <dd class="text-base font-medium text-gray-900 dark:text-white">$99</dd>
              </dl>

              <dl class="flex items-center justify-between gap-4">
                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Tax</dt>
                <dd class="text-base font-medium text-gray-900 dark:text-white">$799</dd>
              </dl>
            </div>

            <dl class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 dark:border-gray-700">
              <dt class="text-base font-bold text-gray-900 dark:text-white">Total</dt>
              <dd class="text-base font-bold text-gray-900 dark:text-white">$8,191.00</dd>
            </dl>
          </div>

          <a href="#" class="flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Proceed to Checkout</a>

          <div class="flex items-center justify-center gap-2">
            <span class="text-sm font-normal text-gray-500 dark:text-gray-400"> or </span>
            <a href="#" title="" class="inline-flex items-center gap-2 text-sm font-medium text-primary-700 underline hover:no-underline dark:text-primary-500">
              Continue Shopping
              <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
              </svg>
            </a>
          </div>
        </div>
        @endif

      </div>
    </div>
  </div>
  <div class="container px-32">
    <div class=" pt-8">
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
  <div class=" pt-8">
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
</div>
</section>

@endsection
