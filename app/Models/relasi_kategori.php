<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class relasi_kategori extends Model
{
    use HasFactory;
    protected $table = 'relasi_kategori';
    protected $fillable = [
        'id',
        'id_buku',
        'id_kategori',
        'created_at',
        'updated_at'
    ];
}