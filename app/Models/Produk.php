<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produks';
    protected $primaryKey = 'id_produk';
    protected $guarded = [];
    protected $fillable = [
        'nama_produk',
        'kode_produk',
        'id_kategori',
        'merk',
        'harga_beli',
        'harga_jual',
        'diskon',
        'stok'
    ];
}
