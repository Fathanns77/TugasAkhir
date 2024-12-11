<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
            //
            public function home() {
                return view('home');
            }
            public function about() {
                return view('about');
            }
            public function card() {
                return view('card');
            }
            public function desk() {
                return view('desk');
            }
            public function keranjang() {
                return view('keranjang');
            }
            public function contact() {
                return view('contact');
            }

}
