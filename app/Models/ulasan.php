<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ulasan extends Model
{
    use HasFactory;
    protected $table = 'ulasan';
    protected $fillable = [
        'id_user',
        'id_buku',
        'ulasan',
        'rating',
        'tanggal',
    ];
}
