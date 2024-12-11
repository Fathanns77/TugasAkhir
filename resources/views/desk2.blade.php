@extends('template')
@section('header')
@section('footer')
<div class="flex justify-center  w-screen h-screen bg-white">
   <div class="bg-white p-6 rounded-lg flex">
    <!-- Left Section -->
    <div class="flex">
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
            class="rounded-lg" height="500" src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/eb565318-308f-40bc-b9da-1db2cf863cc3/WMNS+AIR+JORDAN+1+LOW+SE.png" width="500" alt="Main Image"/>
        <div class="absolute top-2 left-2 bg-white px-2 py-1 rounded-full shadow-md">
         <i class="fas fa-star text-black"></i>
         Highly Rated
        </div>
      </div>
    </div>

    <!-- Right Section -->
    <div class="ml-8">
    <div class="flex justify-between items-center mb-4">
            <span class="text-gray-600">Wanita • Originals</span>
            <a href="#" class="text-gray-600 underline">Tulis Ulasan</a>
        </div>
        <h1 class="text-3xl font-semibold italic mb-2">Air Jordan 1 Low SE</h1>
        <div class="flex space-x-2 mb-2">
        <img alt="Small image 1" class="w-12 h-12 rounded-lg cursor-pointer border border-gray-300" src="https://placehold.co/50x50"/>
        <img alt="Small image 2" class="w-12 h-12 rounded-lg cursor-pointer border border-gray-300" src="https://placehold.co/50x50"/>
        <img alt="Small image 3" class="w-12 h-12 rounded-lg cursor-pointer border border-gray-300" src="https://placehold.co/50x50"/>
       </div>
        <div class="flex items-center mb-4">
            <span class="text-red-600 text-xl font-bold">Rp. 840.000</span>
            <span class="text-gray-400 line-through ml-2">Rp. 1.200.000</span>
        </div>
        <h2 class="text-lg font-bold mb-2">PILIH SIZE</h2>
        <div class="flex space-x-4 mb-4">
            <div class="border border-gray-400 p-2 flex items-center justify-between w-24">
                <span>UK</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="border border-gray-400 p-2 flex items-center justify-between w-24">
                <span>UKURAN</span>
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
        <p class="text-red-600 mb-4">Tersedia</p>
        <div class="flex items-center mb-4">
            <a href="#" class="text-gray-600 underline flex items-center">
                <i class="fas fa-ruler mr-2"></i>PANDUAN UKURAN
            </a>
            <a href="#" class="text-gray-600 underline ml-4 flex items-center">
                <i class="fas fa-envelope mr-2"></i>Ukuran yang dipilih habis?
            </a>
        </div>
        <button class="bg-black text-white py-3 px-6 w-full flex items-center justify-between">
            <span>TAMBAH KE KERANJANG</span>
            <i class="fas fa-arrow-right"></i>
        </button>
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
                <i class="fas fa-comments"></i>
            </button>
        </div>
    </div>
   </div>
  </div>
  <script>
    // JavaScript function to change the main image
    function changeImage(imageUrl) {
      document.getElementById("mainImage").src = imageUrl;
    }
  </script>
@endsection
