<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;


class anggota extends Model
{
    use HasFactory;
    protected $table = 'anggota';
    protected $fillable = [
        'kode_anggota',
        'nama_lengkap',
        'alamat',
        'jenis_kel',
        'email',
        'password',
    ];
}
