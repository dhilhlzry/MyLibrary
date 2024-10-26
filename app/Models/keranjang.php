<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keranjang extends Model
{
    use HasFactory;
    protected $table = 'keranjang';
    protected $fillable = [
        'id_user',
        'id_buku',
        'kode_buku',
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit',
    ];
}
