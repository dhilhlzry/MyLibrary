<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class koleksi extends Model
{
    use HasFactory;
    protected $table = 'koleksi';
    protected $fillable = [
        'id_buku',
        'id_user',
    ];
}
