<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class petugas extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'name',
        'alamat',
        'jenis_kel',
        'no_telp',
        'email',
        'password',
        'level',
    ];
}
