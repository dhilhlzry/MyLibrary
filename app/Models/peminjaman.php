<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';
    protected $fillable = [
        'kode_pinjam',
        'id_user',
        'id_buku',
        'tanggal_pinjam',
        'tanggal_kembali',
        'status',
    ];
}
