<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['sepatu_id', 'quantity'];

    public function sepatu()
    {
        return $this->belongsTo(Sepatu::class, 'sepatu_id');
    }
}
