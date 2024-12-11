<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</head>
<body class="m-0 p-0">
    <!-- Navbar -->
     <header>
        @yield('header')
        <nav id="navbar" class="fixed top-0 left-0 right-0 bg-white border-grazy-200 dark:bg-gray-900 z-50">
        <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4 items-center">
          <span>
          <img src="{{ url('image/pfp2.png') }}" class=" h-8 me-3" alt="" />
          </span>

        <!-- Nav Links -->
        <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
          <li><a class="hover:text-gray-200" href="{{ url('/') }}">Home</a></li>
          <li><a class="hover:text-gray-200" href="{{ url('about') }}">About</a></li>
          <li><a class="hover:text-gray-200" href="{{ url('card') }}">Products</a></li>
          <li><a class="hover:text-gray-200" href="{{ url('contact') }}">Contact</a></li>
        </ul>
        <!-- Header Icons -->
        <div class="hidden xl:flex items-center space-x-5 items-center">
          <a class="hover:text-gray-200" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
          </a>
          <a class="flex items-center hover:text-gray-200" href="{{ url('/cart') }}">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
            <span class="flex absolute -mt-5 ml-4">
              <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
                </span>
              </span>
          </a>
          <!-- Sign In / Register      -->
          <a class="flex items-center hover:text-gray-200" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
          </a>
          
        </div>
        
      </div>
    
    </nav>

     </header>
    <!-- footer -->
    <footer class="bg-white mt-8 ">
        @yield('footer')
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
              <div class="mb-6 md:mb-0">
                  <a href="{{url('https://www.instagram.com/cheannsh_?igsh=MW4zOHZvemo4cDJhbA==')}}" class="flex items-center">
                      <img src="{{ url('image/pfp2.png') }}" class=" h-40 me-3" alt="" />
                      <span class="pl-2 self-center text-red-500 text-2xl font-semibold whitespace-nowrap dark:text-red-500"></span>
                  </a>
              </div>
              <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                  <div>
                      <h2 class="mb-6 text-sm font-bold text-black uppercase dark:text-black">Resources</h2>
                      <ul class="text-black dark:text-black font-medium">
                          <li class="mb-4">
                              <a href="{{url('https://flowbite.com/')}}" class="transition-colors duration-300 hover:text-red-400">Flowbite</a>
                          </li>
                          <li>
                              <a href="{{url('https://tailwindcss.com/')}}" class="transition-colors duration-300 hover:text-red-400">Tailwind CSS</a>
                          </li>
                          <li class="mt-4">
                              <a href="{{url('https://kitwind.io/products/kometa/components/blog')}}" class="transition-colors duration-300 hover:text-red-400">Kitwind</a>
                          </li>
                      </ul>
                  </div>
                  <div>
                      <h2 class="mb-6 text-sm font-bold text-black uppercase dark:text-black">Follow us</h2>
                      <ul class="text-black dark:text-black font-medium">
                          <li class="mb-4">
                              <a href="{{url('https://www.instagram.com/cheannsh_?igsh=MW4zOHZvemo4cDJhbA==')}}" class="transition-colors duration-300 hover:text-red-400 ">Instagram</a>
                          </li>
                          <li>
                              <a href="{{url('https://www.facebook.com/chean.cuy?locale=id_ID')}}" class="transition-colors duration-300 hover:text-red-400">Facebook</a>
                          </li>
                      </ul>
                  </div>
                  <div>
                      <h2 class="mb-6 text-sm font-bold text-black uppercase dark:text-black">Legal</h2>
                      <ul class="text-black dark:text-black font-medium">
                          <li class="mb-4">
                              <a href="#" class="transition-colors duration-300 hover:text-red-400">Privacy Policy</a>
                          </li>
                          <li>
                              <a href="#" class="transition-colors duration-300 hover:text-red-400">Terms &amp; Conditions</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>

          <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
          <div class="sm:flex sm:items-center sm:justify-between">
              <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://flowbite.com/" class="transition-colors duration-300 hover:text-red-400">TrendyWalk</a>. All Rights Reserved.
              </span>
          </div>
        </div>
    </footer>

</body>
<script>
const navbar = document.getElementById("navbar");
let lastScrollTop = 0;

window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    if (currentScroll > lastScrollTop) {
        // Scroll ke bawah
        navbar.classList.add("opacity-0");
        navbar.classList.remove("opacity-100");
    } else {
        // Scroll ke atas
        navbar.classList.add("opacity-100");
        navbar.classList.remove("opacity-0");
    }

    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Hindari nilai negatif
});

  </script>
</html>
