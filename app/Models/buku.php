<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $fillable = [
        'id',
        'kode_buku',
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit',
        'created_at',
        'updated_at'
    ];
}
