<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;


class KategoriSeeder extends Seeder
{
    public function run()
    {
        Kategori::create(['nama' => 'Nike Dunk']);
        Kategori::create(['nama' => 'Air Jordan']);
        Kategori::create(['nama' => 'Samba']);
    }
}
