<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class UlasanServices
{
    public function index()
    {
        return DB::table('ulasan')
        ->join('anggota', 'ulasan.id_user', '=', 'anggota.id')
        ->select(
            'ulasan.id AS id',
            'ulasan.id_user AS id_user',
            'anggota.kode_anggota AS kode_anggota',
            'anggota.nama_lengkap AS nama_lengkap',
            'anggota.alamat AS alamat',
            'anggota.jenis_kel AS jenis_kel',
            'anggota.email AS email',
            'ulasan.id_buku AS id_buku',
            'ulasan.ulasan AS ulasan',
            'ulasan.rating AS rating',
            'ulasan.tanggal AS tanggal'
        );
    }
}
