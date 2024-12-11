<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sepatu extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi Laravel
    protected $table = 'sepatus';  // Misalnya, nama tabel di database adalah 'produks'

    // Tentukan kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'nama', 'gambar', 'harga', 'deskripsi',
    ];
}
