<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi
    protected $fillable = [
        'kode_produk',
        'nama',
        'deskripsi',
        'harga',
        'stok',
        'gambar',
        'kategori_id',
        'platform',
        'zip_file',
        'user_id' // Add user_id to fillable
    ];

    // Add relationship to User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class, 'kode_produk', 'kode_produk');
    }
}
